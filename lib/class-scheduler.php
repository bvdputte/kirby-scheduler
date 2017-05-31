<?php
class scheduler {

    // Redirect if scheduled
    public static function autopublish() {
        $site  = site();
        $folder = c::get('plugin.scheduler.folderuid', 'news');

        $scheduledPagesParent = $site->page($folder);
        $scheduledPages = $scheduledPagesParent->children()->invisible()->scheduled()->scheduledToPublish();

        foreach($scheduledPages as $page) {
            try {
                $page->sort( $scheduledPagesParent->children()->visible()->count() +1 );
            } catch(Exception $e) {
                error_log($e);
            }
        }
    }

    /* Controller helpers */

    // Redirect if scheduled
	public static function redirect( $page ) {
		if( $page->isScheduledPublishable() ) {
			self::go( $page );
		}
	}

	// Run redirect if not on error page
	public static function go( $page ) {
		$errorPage = site()->errorPage();

		if( $page->id() != $errorPage->id() ) {
			go( $errorPage );
		}
	}
}
