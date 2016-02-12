<?php
script('contactsrework', 'vendor/angular/angular');
script('contactsrework', 'vendor/angular-ui-router/release/angular-ui-router');
script('contactsrework', 'vendor/dav/dav');
script('contactsrework', 'vendor/vcard/src/vcard');
script('contactsrework', 'vendor/angular-uuid4/angular-uuid4');
script('contactsrework', 'vendor/angular-cache/dist/angular-cache');
script('contactsrework', 'public/script');
style('contactsrework', 'public/style');
?>

<div id="app" ng-app="contactsApp">
	<div id="app-navigation">

		<ul addressBookList></ul>

		<div id="app-settings">
			<div id="app-settings-header">
				<button class="settings-button"
						data-apps-slide-toggle="#app-settings-content"
				></button>
			</div>
			<div id="app-settings-content">
				<addressBookList></addressBookList>
			</div>
		</div>
	</div>

	<div id="app-content">
		<div class="app-content-list" ui-view></div>
		<div class="app-content-detail" ui-view="sidebar"></div>
	</div>
</div>
