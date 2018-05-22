<?php
/**
 * SkinTemplate class for the WikiNine skin
 *
 * @ingroup Skins
 */
class SkinWikiNine extends SkinTemplate {
	public $skinname = 'wikinine';
	public $stylename = 'WikiNine';
	public $template = 'WikiNineTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.wikinine'
		] );
		$out->addModules( [
			'skins.wikinine.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
