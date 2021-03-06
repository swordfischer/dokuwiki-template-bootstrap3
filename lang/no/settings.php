<?php
/**
 * Norwegian Language file for config
 *
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @author   Torkill Bruland
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

$lang['bootstrapTheme']               = 'Bootstrap-temaet';
$lang['bootstrapTheme_o_bootswatch']  = 'Bootswatch.com-tema';
$lang['bootstrapTheme_o_custom']      = 'Tilpasset bootstrap-tema';
$lang['bootstrapTheme_o_default']     = 'Vanlig bootstrap-tema';
$lang['bootstrapTheme_o_optional']    = 'Alternativt bootstrap-tema';
$lang['bootswatchTheme']              = 'Velg tema fra Bootswatch.com';
$lang['browserTitle']                 = 'DokuWiki nettlesertittel (standard er <code>@TITLE@ [@WIKI@]</code>, der <code>@TITLE@</code>-plassholderen erstatter den nåværende sidetittel og <code>@WIKI@</code> erstatter DokuWiki-navnet) - se <a class="interwiki iw_doku" href="#config___title">tittel</a> config';
$lang['browserTitleCharSepNS']        = 'Tegn-separator for hvert navnerom i nettleserens tittel';
$lang['browserTitleOrderNS']          = 'Sett rekkefølgen av navnerom';
$lang['browserTitleShowNS']           = 'Vis forrige sides sidenavn i den nåværende siden i nettleserens tittel';
$lang['collapsibleSections']          = 'Collapse 2nd section level (useful in mobile/tablet devices)';
$lang['cookieLawBannerPage']          = 'Sidenavn for Cookie-lov-banner';
$lang['cookieLawPolicyPage']          = 'Sidenavn for Cookie-lovs policy-side';
$lang['customTheme']                  = 'Sett inn URL for tilpasset tema';
$lang['discussionPage']               = 'Diskusjonssides navn (standard er <code>diskusjon:@ID@</code>, der <code>@ID@</code>-plassholderen erstatter det nåværene sidenavn), tomt felt deaktiverer lenken';
$lang['domParserMaxPageSize']         = 'Set the max size of the page content for DOM Parser. The optimal and default value is <code>600000</code> (600KB)';
$lang['fixedTopNavbar']               = 'Fest Navigasjonslinja til toppen';
$lang['fluidContainer']               = 'Slå på flytende innholds-elementer (side i full bredde)';
$lang['fluidContainerBtn']            = 'Vis en knapp i Navigasjonslinja for utvidelse av innholds-elementer';
$lang['googleAnalyticsAnonymizeIP']   = 'Anonymiser besøkernes IP-adresse';
$lang['googleAnalyticsNoTrackAdmin']  = 'Slå av sporing for Admin-brukeren';
$lang['googleAnalyticsNoTrackPages']  = 'Slå av sporing for spesifikke sider (sett inn regexp)';
$lang['googleAnalyticsNoTrackUsers']  = 'Slå av sporing for alle innloggede brukere';
$lang['googleAnalyticsTrackActions']  = 'Spor DokuWiki-handlinger (redigeringer, søk, etc.)';
$lang['googleAnalyticsTrackID']       = 'Sporings-ID';
$lang['gravatarURL']                  = 'Set Gravatar URL <br/> <strong>NOTE:</strong> <br/> - <code>http://www.gravatar.com/avatar</code> (http) <br/> - <code>https://secure.gravatar.com/avatar</code> (https) <br/> - <code>https://www.gravatar.com/avatar</code> (alternative https)';
$lang['hideInThemeSwitcher']          = 'Skjul temaer i Tema-velger';
$lang['hideLoginLink']                = 'Skjul innloggings-knapp i Navigasjonslinja. Dette alternativet er nyttig "read-only"-installasjoner av Dokuwiki (dvs. blogg, personlig nettsted)';
$lang['homePageURL']                  = 'Use custom URL for home-page links';
$lang['individualTools']              = 'Del av Verktøy i en individuell meny i Navigasjonslinja';
$lang['inverseNavbar']                = 'Inverter navigasjonslinja';
$lang['landingPages']                 = 'Landingssides navn (sett inn regex)';
$lang['leftSidebarGrid']              = 'Venstre sidepanel grid-klasser <code>col-{xs,sm,md,lg}-x</code> (se <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a> for dokumentasjon)';
$lang['libravatarURL']                = 'Set Libravatar (or compatible API) URL <br/> <strong>NOTE:</strong> <br/> - <code>https://seccdn.libravatar.org/avatar</code> (https) <br/> - <code>http://cdn.libravatar.org/avatar</code> (http)';
$lang['navbarLabels']                 = 'Vis/Skjul individuelle etiketter';
$lang['office365URL']                 = 'Set Microsoft Office 365 (or EWS) URL <br/> <strong>NOTE:</strong> This service requires login, so this use case is most useful in a corporate installation, where all users have access to Office 365.';
$lang['pageIcons']                    = 'Velg ikoner som skal vises';
$lang['pageInfo']                     = 'Vis/Skjul side-info-elementer';
$lang['pageInfoDateFormat']           = 'Datoformat';
$lang['pageInfoDateFormat_o_dformat'] = 'DokuWiki-format';
$lang['pageInfoDateFormat_o_human']   = 'Menneskeleselig';
$lang['pageOnPanel']                  = 'Slå på panelet rundt siden';
$lang['pageToolsAnimation']           = 'Aktiver animasjon av Sideverktøy';
$lang['rightSidebar']                 = 'Sidenavn for Høyre Sidepanel. Tomt felt deaktiverer høyre sidepanel.<br/>Høyre Sidelinje vises bare når standard DokuWiki <a class="interwiki iw_doku" href="#config___sidebar">sidepanel</a> er slått på og <code>venstre</code> posisjon er slått på (se <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosisjon</a> for konfigurering). Hvis du bare ønsker DokuWiki sidepanel på høyre side, sett da opp konfigurasjonen av <a class="interwiki iw_doku" href="#config___tpl____bootstrap3____sidebarPosition">sidebarPosisjon</a> med verdien <code>høyre</code> value';
$lang['rightSidebarGrid']             = 'Høyre sidepanel grid-klasser <code>col-{xs,sm,md,lg}-x</code> (se <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap Grids</a>-dokumentasjon)';
$lang['schemaOrgType']                = 'Schema.org type (<code>Artikkel</code>, <code>NyhetsArtikkel</code>, <code>TechArtikkel</code>, <code>BloggPost</code>, <code>Oppskrift</code>)';
$lang['semantic']                     = 'Aktiver semantiske data';
$lang['showAddNewPage']               = 'Enable the Add New Page plugin in navbar  (require <em>Add New Page Plugin</em>)';
$lang['showAddNewPage_o_always']      = 'Alltid';
$lang['showAddNewPage_o_logged']      = 'Når innlogget';
$lang['showAddNewPage_o_never']       = 'Aldri';
$lang['showAdminMenu']                = 'Vis Administrasjons-menyen';
$lang['showBadges']                   = 'Vis emblem-knapper  (DokuWiki, Donere, etc)';
$lang['showCookieLawBanner']          = 'Vis Cookie-lov-banneret i sidefot';
$lang['showDiscussion']               = 'Vis diskusjons-lenke i verktøy-menyen';
$lang['showEditBtn']                  = 'Vis Rediger-knapp i Navigasjonsmenyen';
$lang['showEditBtn_o_always']         = 'Alltid';
$lang['showEditBtn_o_logged']         = 'Når innlogget';
$lang['showEditBtn_o_never']          = 'Aldri';
$lang['showHomePageLink']             = 'Vis lenka Hjemme-side i navigasjonslinja';
$lang['showIndividualTool']           = 'Slå på/av individuelle verktøy i Navigasjonslinja';
$lang['showLandingPage']              = 'Slå på landings-siden (uten sidepanel og panelet rundt siden)';
$lang['showLoginOnFooter']            = 'Vis en "liteb" innloggings-lenke i sidefoten. Dette alternativet er nyttig når  <code>hideLoginLink</code> er på';
$lang['showNavbar']                   = 'Vis hook for navigasjonslinja';
$lang['showNavbar_o_always']          = 'Alltid';
$lang['showNavbar_o_logged']          = 'Når logget inn';
$lang['showPageIcons']                = 'Vis nyttige ikoner (utskrift, del lenke, send epost, etc.) på siden';
$lang['showPageId']                   = 'Vis DokuWikiens sidenavn (pageid) øverst';
$lang['showPageInfo']                 = 'Vis sideinfo (dvs. dato, forfatter)';
$lang['showPageTools']                = 'Aktiver Sideverktøy for Dokuwiki-stil';
$lang['showPageTools_o_always']       = 'Alltid';
$lang['showPageTools_o_logged']       = 'Når logget inn';
$lang['showPageTools_o_never']        = 'Aldri';
$lang['showPurgePageCache']           = 'Display the "Purge Cache Page" button in Page Tools';
$lang['showPurgePageCache_o_always']  = 'Always';
$lang['showPurgePageCache_o_logged']  = 'When logged in';
$lang['showPurgePageCache_o_never']   = 'Never';
$lang['showSearchForm']               = 'Vis søkeskjema i Navigasjonsmenyen';
$lang['showSearchForm_o_always']      = 'Alltid';
$lang['showSearchForm_o_logged']      = 'Når innlogget';
$lang['showSearchForm_o_never']       = 'Aldri';
$lang['showSemanticPopup']            = 'Display a popup with an extract of the page when the user hover on wikilink (require <em>Semantic Plugin</em>)';
$lang['showThemeSwitcher']            = 'Vis Bootswatch.com sin tema-velger i Navigasjonsmenyen';
$lang['showTools']                    = 'Vis Verktøy i Navigasjonsmenyen';
$lang['showTools_o_always']           = 'Alltid';
$lang['showTools_o_logged']           = 'Når logget inn';
$lang['showTools_o_never']            = 'Aldri';
$lang['showTranslation']              = 'Vis verktøylinje for oversettelser (krever <em>Translation Plugin</em>)';
$lang['showUserHomeLink']             = 'Vis lenke til Brukerhjemmeside i Navigasjonslinja';
$lang['showWikiInfo']                 = 'Display DokuWiki <a class="interwiki iw_doku" href="#config___title">name</a>, logo and <a class="interwiki iw_doku" href="#config___tagline">tagline</a> on footer';
$lang['sidebarOnNavbar']              = 'Display the sidebar contents inside the navbar (useful on mobile/tablet devices)';
$lang['sidebarPosition']              = 'Posisjonen på DokuWiki Sidepanel (<code>venstre</code> eller <code>høyre</code>)';
$lang['sidebarShowPageTitle']         = 'Vis sidetittel på Sidepanel';
$lang['socialShareProviders']         = 'Velg hvilke sosiale delings-lenker som skal vises';
$lang['tableFullWidth']               = 'Slå på 100% bredde på tabeller (Bootstrap standardverdi)';
$lang['tableStyle']                   = 'Tabell-stil';
$lang['tagsOnTop']                    = 'Flytt alle Tagger på toppen av siden, ved siden av side-id (Krever  <em>Tag Plugin</em>)';
$lang['themeByNamespace']             = 'Use a namespaced theme';
$lang['tocAffix']                     = 'Heft Innholdsfortegnelsen ved rulling av siden';
$lang['tocCollapseOnScroll']          = 'Slå sammen Innholdsfortegnelsen ved rulling';
$lang['tocCollapseSubSections']       = 'Slå sammen under-seksjoner i Innholdsfortegnelsen for å spare plass';
$lang['tocCollapsed']                 = 'Slå sammen innholdsfortegnelsen på alle sider';
$lang['tocPosition']                  = 'Innholdsfortegnelsens posisjon';
$lang['tocLayout']                    = 'TOC layout';
$lang['useACL']                       = 'Use ACL for sidebars (left and right) and for all DokuWiki hooks (eg. <code>:footer</code>, <code>:navbar</code>, etc.) <br/> <strong>NOTE:</strong> Available since "Elenor of Tsort" DokuWiki release';
$lang['useAnchorJS']                  = 'Bruk AnchorJS';
$lang['useAvatar']                    = 'Load the avatar image from Gravatar, Libravatar, Microsoft Office365 or local DokuWiki <code>:user</code> namespace';
$lang['useAvatar_o_gravatar']         = 'Gravatar';
$lang['useAvatar_o_libravatar']       = 'Libravatar';
$lang['useAvatar_o_local']            = 'DokuWiki :user namespace';
$lang['useAvatar_o_off']              = 'Off';
$lang['useAvatar_o_office365']        = 'Office365 (or EWS)';
$lang['useAvatar_o_activedirectory']  = 'Active Directory';
$lang['useGoogleAnalytics']           = 'Slå på  Google Analytics';
$lang['useLegacyNavbar']              = 'Bruk gammel og frarådet <code>navbar.html</code> hook (vurder for fremtiden å bruke <code>:navbar</code> hook)';
$lang['useLocalBootswatch']           = 'Bruk lokal Bootswatch-mappe. Dette alternativet er nyttig DokuWiki-installasjon i "intranet".';

