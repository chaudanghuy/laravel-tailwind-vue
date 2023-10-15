<template>
  <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="/src/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="listings">Catagories</a></li> 
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="/listing">listing Details</a></li>
                                            <li><a href="/listings">Catagories</a></li> 
                                        </ul>
                                    </li>
                                    <li><a href="/blogs">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="/blog">Blog Details</a></li>
                                            <li><a href="/elements">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="#" class="mr-40"><i class="ti-user"></i> Log in</a>
                            <a href="#" class="btn">Add Listing</a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
</template>
