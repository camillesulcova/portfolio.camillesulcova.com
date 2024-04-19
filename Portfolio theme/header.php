<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name")?></title>

    
 

    <?php wp_head() ?>
</head>

<body>
    <title><?php the_title() ?></title>

    <nav class="nav__container">

        <nav class="nav__menu" id="nav-menu">
            <div class="nav__menu" id="nav-menu">
                <ul class="sidebar" class="hideOnDesktop" >
                    <li class="hideOnDesktop" onclick=hideSidebar()>
                        <a href="#" class="nav__close-icon"></a><svg class="close-icon"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"
                            fill="#F4F0E6">
                            <path
                                d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                            </path>
                        </svg>
                    </li>
                    <li class="hideOnDesktop">
                        <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>" class="nav__link">home</a>
                    </li>

                    <li class="hideOnDesktop">
                        <a href="<?php echo get_permalink(get_page_by_path("about")) ?>" class="nav__link">about</a>
                    </li>

                    <li class="hideOnDesktop">
                        <a href="<?php echo get_permalink(get_page_by_path("work")) ?>" class="nav__link">work</a>
                    </li>

                    <li class="hideOnDesktop">
                        <a href="<?php echo get_permalink(get_page_by_path("fontpage")) ?>#contact" class="nav__link">contact</a>
                    </li>

                </ul>
                <ul class="nav__list">
                    <li class="hideOnMobile">
                        <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>" class="nav__link">home</a>
                    </li>

                    <li class="hideOnMobile">
                        <a href="<?php echo get_permalink(get_page_by_path("about")) ?>" class="nav__link">about</a>
                    </li>

                    <li class="hideOnMobile">
                        <a href="<?php echo get_permalink(get_page_by_path("work")) ?>" class="nav__link">work</a>
                    </li>

                    <li class="hideOnMobile">
                        <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>#contact" class="nav__link">contact</a>
                    </li>
                    <li onclick="showSidebar()" class="hideOnDesktop"><a href="#"><svg class="menu__icon"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="26" width="26"
                                fill="currentColor">
                                <path
                                    d="M7 11.5C4.51472 11.5 2.5 9.48528 2.5 7C2.5 4.51472 4.51472 2.5 7 2.5C9.48528 2.5 11.5 4.51472 11.5 7C11.5 9.48528 9.48528 11.5 7 11.5ZM7 21.5C4.51472 21.5 2.5 19.4853 2.5 17C2.5 14.5147 4.51472 12.5 7 12.5C9.48528 12.5 11.5 14.5147 11.5 17C11.5 19.4853 9.48528 21.5 7 21.5ZM17 11.5C14.5147 11.5 12.5 9.48528 12.5 7C12.5 4.51472 14.5147 2.5 17 2.5C19.4853 2.5 21.5 4.51472 21.5 7C21.5 9.48528 19.4853 11.5 17 11.5ZM17 21.5C14.5147 21.5 12.5 19.4853 12.5 17C12.5 14.5147 14.5147 12.5 17 12.5C19.4853 12.5 21.5 14.5147 21.5 17C21.5 19.4853 19.4853 21.5 17 21.5ZM7 9.5C8.38071 9.5 9.5 8.38071 9.5 7C9.5 5.61929 8.38071 4.5 7 4.5C5.61929 4.5 4.5 5.61929 4.5 7C4.5 8.38071 5.61929 9.5 7 9.5ZM7 19.5C8.38071 19.5 9.5 18.3807 9.5 17C9.5 15.6193 8.38071 14.5 7 14.5C5.61929 14.5 4.5 15.6193 4.5 17C4.5 18.3807 5.61929 19.5 7 19.5ZM17 9.5C18.3807 9.5 19.5 8.38071 19.5 7C19.5 5.61929 18.3807 4.5 17 4.5C15.6193 4.5 14.5 5.61929 14.5 7C14.5 8.38071 15.6193 9.5 17 9.5ZM17 19.5C18.3807 19.5 19.5 18.3807 19.5 17C19.5 15.6193 18.3807 14.5 17 14.5C15.6193 14.5 14.5 15.6193 14.5 17C14.5 18.3807 15.6193 19.5 17 19.5Z">
                                </path>
                                
                            </svg>
                            </a>
                    </li>

                </ul>



        </nav>


        </div>

    </nav>

