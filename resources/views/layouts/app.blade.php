<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Language" content="en">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>{{ config('app.name', 'Gestion Stock') }}</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
      <meta name="description" content="This is an example dashboard created using build-in elements and components.">
      <meta name="msapplication-tap-highlight" content="no">
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/main.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/select2-bootstrap4.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
	 
   </head>
   <body>
      <div id="appp">
         <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
               <div class="app-header__logo">
                  <div class="logo-src"></div>
                  <div class="header__pane ml-auto">
                     <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="app-header__mobile-menu">
                  <div>
                     <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                     <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                     </span>
                     </button>
                  </div>
               </div>
               <div class="app-header__menu">
                  <span>
                  <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                  <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                  </span>
                  </button>
                  </span>
               </div>
               <div class="app-header__content">
                  <div class="app-header-left">
                     <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
					 @if ( Auth::user()->id==1 )
						<li class="nav-item">
                           <a  class="nav-link {{ Request::path() == 'home' ? 'active' : '' }}{{ Request::path() == 'piece/create' ? 'active' : '' }}" href="{{url('home')}}">
                           <span>Les Entrées</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a  class="nav-link {{ Request::path() == 'vers-chantier-ou-harbil' ? 'active' : '' }}"  href=" {{url('vers-chantier-ou-harbil')}}">
                           <span>Les Sorties</span>
                           </a>
                        </li>
                       	<li class="nav-item">
                           <a  class="nav-link  {{ Request::path() == 'inventaires' ? 'active' : '' }}"  href="/inventaires">
                           <span>L'Inventaires</span>
                           </a>
                        </li>
                   	@endif
					
						 @if ( Auth::user()->id!=1 )
						<li class="nav-item">
                           <a  class="nav-link {{ Request::is('inventaires') ? 'active' : '' }}"  href="/inventaires">
                           <span>L'inventaires</span>
                           </a>
                        </li>
                   	@endif
					
					<li class="nav-item">
                           <a class="nav-link logout"   href="/logout">
                           <span>Déconnexion</span>
                           </a>
                        </li>
					
					
                     </ul>
                  </div>
                  <div class="app-header-right">
                     <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                           <div class="widget-content-wrapper">
                              <div class="widget-content-left">
                                 <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                   
                                 </div>
                              </div>
                              <div class="widget-content-left  ml-3 header-user-info">
                                 <div class="widget-heading">
								 {{Auth::user()->name}}	
                                    
                                 </div>
                              </div>
                              <div class="widget-content-right header-user-info ml-3">
                                 <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                 <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="ui-theme-settings">
               <div class="theme-settings__inner">
                  <div class="scrollbar-container">
                     <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                           <ul class="list-group">
                              <li class="list-group-item">
                                 <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                       <div class="widget-content-left mr-3">
                                          <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                             <div class="switch-animate switch-on">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="widget-content-left">
                                          <div class="widget-heading">Fixed Header
                                          </div>
                                          <div class="widget-subheading">Makes the header top fixed, always visible!
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                       <div class="widget-content-left mr-3">
                                          <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                             <div class="switch-animate switch-on">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="widget-content-left">
                                          <div class="widget-heading">Fixed Sidebar
                                          </div>
                                          <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                       <div class="widget-content-left mr-3">
                                          <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                             <div class="switch-animate switch-off">
                                                <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="widget-content-left">
                                          <div class="widget-heading">Fixed Footer
                                          </div>
                                          <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                           <div>
                              Header Options
                           </div>
                           <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                           Restore Default
                           </button>
                        </h3>
                        <div class="p-3">
                           <ul class="list-group">
                              <li class="list-group-item">
                                 <h5 class="pb-2">Choose Color Scheme
                                 </h5>
                                 <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                           <div>Sidebar Options</div>
                           <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                           Restore Default
                           </button>
                        </h3>
                        <div class="p-3">
                           <ul class="list-group">
                              <li class="list-group-item">
                                 <h5 class="pb-2">Choose Color Scheme
                                 </h5>
                                 <div class="theme-settings-swatches">
                                    <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                    </div>
                                    <div class="divider">
                                    </div>
                                    <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                    </div>
                                    <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                    </div>
                                    <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                           <div>Main Content Options</div>
                           <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                           </button>
                        </h3>
                        <div class="p-3">
                           <ul class="list-group">
                              <li class="list-group-item">
                                 <h5 class="pb-2">Page Section Tabs
                                 </h5>
                                 <div class="theme-settings-swatches">
                                    <div role="group" class="mt-2 btn-group">
                                       <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                       Line
                                       </button>
                                       <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                       Shadow
                                       </button>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="app-main">
               <div class="app-sidebar sidebar-shadow">
                  <div class="app-header__logo">
                     <div class="logo-src"></div>
                     <div class="header__pane ml-auto">
                        <div>
                           <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                           <span class="hamburger-box">
                           <span class="hamburger-inner"></span>
                           </span>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="app-header__mobile-menu">
                     <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                        </button>
                     </div>
                  </div>
                  <div class="app-header__menu">
                     <span>
                     <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                     <span class="btn-icon-wrapper">
                     <i class="fa fa-ellipsis-v fa-w-6"></i>
                     </span>
                     </button>
                     </span>
                  </div>
                  <div class="scrollbar-sidebar">
                     <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
						  @if ( Auth::user()->id==1 )
                           <li style="margin-top:20px" >
                              <a href="#" class="link_nav active">
                              <i class="metismenu-icon pe-7s-diamond"></i>
                              Paramétrage des Familles
                              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                              </a>
                              <ul class="mm-collapse" style="  display: block;margin-bottom:20px">
							 
                                 <li>
                                    <a href="/addfamille">
                                    <i class="metismenu-icon"></i>
                                    Ajouter une Famille
                                    </a>
                                 </li>
                                 <li>
                                    <a href="/addsousfamille">
                                    <i class="metismenu-icon"></i>
                                    Ajouter une Sous Famille
                                    </a>
                                 </li>
                                 <li>
                                    <a href="/listefamille">
                                    <i class="metismenu-icon"></i>
                                    Listes des Familles
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="#" class="link_nav active">
                              <i class="metismenu-icon pe-7s-diamond"></i>
                              Paramétrage des Articles
                              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                              </a>
                              <ul class="mm-collapse" style="  display: block;margin-bottom:20px">
                                 <li>
                                    <a href="/addpieces">
                                    <i class="metismenu-icon"></i>
                                    Ajouter un Article
                                    </a>
                                 </li>
                                 <li>
                                    <a href="/listepiece">
                                    <i class="metismenu-icon"></i>
                                    Listes des Articles
                                    </a>
                                 </li>
                              </ul>
                           </li>
						   
                           <li>
                              <a href="#" class="link_nav active">
                              <i class="metismenu-icon pe-7s-diamond "></i>
                              Paramétrage des Entrées
                              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                              </a>
                              <ul class="mm-collapse" style="  display: block;margin-bottom:20px">
                              <li>
                                    <a href="">
                                    <i class="metismenu-icon"></i>
                                    Ajouter un Entrée
                                    </a>
									  <ul class="mm-show mm-collapse">
								 
								  <li>
                                            <a href="/piece/create">
                                                <i class="metismenu-icon"></i>
                                                Entrée
                                            </a>
                                        </li>
										  <li>
                                            <a href="/entree/retour">
                                                <i class="metismenu-icon"></i>
                                                Retour
                                            </a>
                                        </li>
										
                                    </ul>
                              	
								
                                 </li>
							 <li>
                                    <a href="/home">
                                    <i class="metismenu-icon"></i>
                                    Listes des Entrées
                                    </a>
                                 </li>
                                
                              </ul>
                           </li>
                           <li>
                              <a href="#" class="link_nav active">
                              <i class="metismenu-icon pe-7s-diamond "></i>
                             Paramétrage des Sorties
                              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                              </a>
                              <ul class="mm-collapse" style="  display: block;margin-bottom:20px">
										<li>
                                            <a href="/bontransfertinternt">
                                                <i class="metismenu-icon"></i>
                                               Bon de Transfert 
                                            </a>
                                        </li>							  
							  <li>
                                    <a href="#">
                                    <i class="metismenu-icon"></i>
                                   Ajouter un Sortie
                                    </a>
								  <ul class="mm-show mm-collapse">
								 
								 
										
                                        <li>
                                            <a href="/vers-chantier-ou-harbil">
                                                <i class="metismenu-icon"></i>
                                                Vers Chantier ou Harbil
                                            </a>
                                        </li>
										  <li>
                                            <a href="/vers-reparation">
                                                <i class="metismenu-icon"></i>
                                                Vers Réparation
                                            </a>
                                        </li>
										
										  <li>
                                            <a href="/vers-vente">
                                                <i class="metismenu-icon"></i>
                                                Vers Vente
                                            </a>
                                        </li>
										
										 <li>
                                            <a href="/retour-non-conformite">
                                                <i class="metismenu-icon"></i>
                                                Retour  non conformité
                                            </a>
                                        </li>
                                    </ul>
                              	
									
                                 </li>
								 
								
								
                                 <li>
                                    <a href="/sortieprint">
                                    <i class="metismenu-icon"></i>
                                    Listes des Sorties
                                    </a>
                                 </li>
                                
                              </ul>
                           </li>
                          @endif
						   @if ( Auth::user()->id!=1 )
							  <li style="margin-top:20px" >
                              <a href="#" class="link_nav active">
                              <i class="metismenu-icon pe-7s-diamond"></i>
                               L'inventaires
                              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                              </a>
                           </li>  
						   
						      @endif
						  <li>
                              <a href="/logout">
                              <i class="metismenu-icon pe-7s-display2"></i>
                              Déconnexion
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="app-main__outer">
                  @yield('content')
                  <div class="app-wrapper-footer">
                     <div class="app-footer">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
      <script src="{{ asset('js/select2.full.min.js') }}"></script>
      <script src="{{ asset('js/chosen.jquery.js') }}"></script>
      <script src="{{ asset('js/init.js') }}"></script>
      <script>
         $(document).ready(function() {
         	
         	$.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         });
         
             $("#fruitList").change(function(){
                 $.ajax({
                     method: 'POST', 
                     url: '/ajouterbla', 
                    
         			data: {'currentadd' : $('select.selectCategory').val()},
                     success: function(response){ 
         			  $("#msg").html(response); 
         			   $(".selectpicker").select2();
         				
                     },
                     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    
                     }
                });
             })
         	
         	
         	  $("#sortie").change(function(){
				  
                 $.ajax({
                     method: 'POST', 
                     url: '/getmsg', 
                    
         			data: {'currentadd' : $('select.sortie').val()},
                     success: function(response){ 
         			  $("#msgsortie").html(response); 
         			   $(".selectpicker").select2();
         				
                     },
                     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    
                     }
                });
             })
         
                  
          $("#id_famille").change(function(){
                 $.ajax({
                     method: 'POST', 
                     url: '/getsfamille', 
                    
         			data: {'id_famille' : $('#id_famille').val()},
                     success: function(response){ 
         			  $("#msgsfmaille").html(response); 
         			   $(".selectpicker.sfamille").select2();
         				
                     },
                     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    
                     }
                });
             })
			 
			  $("#invslect").change(function(){
				  
				$('#famillefilter').val(0);
				$('#famillefilter').trigger("chosen:updated");
				
				$('#sfamillefilter').val(0);
				$('#sfamillefilter').trigger("chosen:updated");
				
				
				$.ajax({
                     method: 'POST', 
                     url: '/ajaxinventaire', 
                    
         			data: {'invslect' : $('#invslect').val()},
                     success: function(response){ 
         			  $("#inventaire").html(response); 
         			   $(".selectpicker.sfamille").select2();	
                     },
                     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    
                     }
                });
             })
			 
			    $("#famillefilter").change(function(){
				
				$('#invslect').val(0);
				$('#invslect').trigger("chosen:updated");
				
				$('#sfamillefilter').val(0);
				$('#sfamillefilter').trigger("chosen:updated");
				
				$.ajax({
                     method: 'POST', 
                     url: '/ajaxinventairef', 
                    
         			data: {'famillefilter' : $('#famillefilter').val()},
                     success: function(response){ 
         			  $("#inventaire").html(response); 
         			   $(".selectpicker.sfamille").select2();	
                     },
                     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    
                     }
                });
             })
			 
	

			 
			    $("#sfamillefilter").change(function(){
					
				$('#invslect').val(0);
				$('#invslect').trigger("chosen:updated");
				
				$('#famillefilter').val(0);
				$('#famillefilter').trigger("chosen:updated");
				
				 $.ajax({
                     method: 'POST', 
                     url: '/ajaxinventairesf', 
                    
         			data: {'sfamillefilter' : $('#sfamillefilter').val()},
                     success: function(response){ 
         			  $("#inventaire").html(response); 
         			  $(".sfamille").chosen-select();	
                     },
                     error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    
                     }
                });
             })
         
		 
$(document).on('click', '.dos_id', function() {

		var str = $(this).data('datac'); 
		
					$.ajax({
                     method: 'POST', 
                     url: '/detailbti', 
                    
         			data: {'id' : str},
                     success: function(response){ 
         			  $(".modal-body").html(response); 
                     }
                    
                });  

				});


 $("#changematr").change(function(){
		
		if ($(this).val() == '50151010'){
		
			$("#hidden_div").attr("style", "display:block");
			} else {
		$("#hidden_div").attr("style", "display:none");
			}

		});




         });
         
  function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><htmlxmlns="http://www.w3.org/1999/xhtml"><head></head><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}

$( "#sfamillefilter" ).change(function() {
$('#famillefilter').prop('selectedIndex',0);
$('#invslect').prop('selectedIndex',0);
});

        	
</script>
<style type="text/css">
  #hidden_div {
    display: none;
}
</style>	  
	  
   </body>
</html>