<?php
require_once 'functions/database_functions.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ambil data tempat menggunakan fungsi getAllPlaces
$places = getAllPlaces();
?>
<!DOCTYPE html>
<html data-wf-page="6700fdb6e1bf8d9b83f92131" data-wf-site="66f00efc0ba3b86a13792a55" lang="en">

<head>
  <meta charset="utf-8" />
  <title>Explore</title>
  <meta content="explore.php" property="og:title" />
  <meta content="explore.php" property="twitter:title" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="css/agency-nx.webflow.6599087d1.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script
    type="text/javascript">
    WebFont.load({
      google: {
        families: ["Oswald:200,300,400,500,600,700", "Inter:300,regular,500,600,700,800", "Material Icons:regular", "Material Icons Outlined:regular"]
      }
    });
  </script>
  <script
    type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="images/app-icon.png" rel="apple-touch-icon" />
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
  </style>
  <script
    type="text/javascript">
    window.__WEBFLOW_CURRENCY_SETTINGS = {
      "currencyCode": "USD",
      "symbol": "$",
      "decimal": ".",
      "fractionDigits": 2,
      "group": ",",
      "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
      "hideDecimalForWholeNumbers": false
    };
  </script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
  <div data-w-id="23d7d02c-4317-0890-8bf3-20ad7d0c046c" class="site-wrapper">
    <div class="progress-bar">
      <div class="progress-bar-line"></div>
    </div>
    <div class="navbar-hide-show-effect">
      <div data-w-id="9dabe443-61bf-363b-c654-3ce84672a380" class="navbar-hide"></div>
    </div>
    <div data-animation="over-left" class="navbar-rounded w-nav" data-easing2="ease" data-easing="ease-out-quart"
      data-collapse="medium" data-w-id="51e4b855-d29a-c7d2-d7af-78ea1dffdf68" role="banner" data-duration="1000"
      id="navbar">
      <div class="w-layout-blockcontainer container nav-container w-container">
        <div class="navbar-main"><a data-w-id="ac2971f4-6f26-e7be-f7cd-a20c97325007" href="/"
            class="w-inline-block">
            <div class="site-logo" style="font-size: 40px; font-weight: bold; color:rgb(255, 255, 255);">VisitVista</div>
          </a>
          <!-- Navigation Menu -->
          <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
            <div class="nav-menu-left-sidebar">
              <a href="/" data-w-id="783761a9-bb85-bb38-0e07-8475a4b307cb" class="nav-link-wrapper w-inline-block">
                <div class="nav-link">
                  <div class="default-text">Home</div>
                  <div class="default-text black-heading">Home</div>
                </div>
                <div class="absolute-hover-bottom"></div>
              </a>
              <a href="../about-us-1.php" data-w-id="783761a9-bb85-bb38-0e07-8475a4b307cb" class="nav-link-wrapper w-inline-block">
                <div class="nav-link">
                  <div class="default-text">About</div>
                  <div class="default-text black-heading">About</div>
                </div>
                <div class="absolute-hover-bottom"></div>
              </a>
              <a href="/pricing" data-w-id="983316c4-923a-8075-52d1-d1a1eb2cf7b2" class="nav-link-wrapper w-inline-block">
                <div class="nav-link">
                  <div class="default-text">Pricing</div>
                  <div class="default-text black-heading">Pricing</div>
                </div>
                <div class="absolute-hover-bottom"></div>
              </a>
              <a href="explore.php" data-w-id="279a1d22-4f80-d177-04f5-58c1a704eb82" class="nav-link-wrapper w-inline-block">
                <div class="nav-link">
                  <div class="default-text">Explore</div>
                  <div class="default-text black-heading">Explore</div>
                </div>
                <div class="absolute-hover-bottom"></div>
              </a>
              <a href="portfolio-2.php" data-w-id="aeb1c1fc-3038-8a62-2af0-a4afc7395963" class="nav-link-wrapper w-inline-block">
                <div class="nav-link">
                  <div class="default-text">Article</div>
                  <div class="default-text black-heading">Article</div>
                </div>
                <div class="absolute-hover-bottom"></div>
              </a>
            </div>
            <div class="close-navbar-icon w-nav-button">
              <div class="close-icon-rotate-white">close</div>
            </div>
          </nav>
          <div class="search-button-wrapper">
            <div class="pointer"><img data-w-id="108e4025-824f-59fd-ba99-015fe13c7bc7" loading="lazy" alt=""
                src="images/magnifying-glass.png" class="icon-svg-20-px" />
              <div class="search-popup">
                <div class="container">
                  <form action="/search" class="search-field-wrapper w-form">
                    <div class="search-input-wrapper">
                      <input class="popup-search-input w-input"
                        maxlength="256"
                        name="query"
                        placeholder="Search destinations..."
                        type="search"
                        id="search"
                        required=""
                        autocomplete="off"
                        onfocus="showAllSuggestions()"
                        onkeyup="filterSuggestions(this.value)" />
                      <div id="suggestions" class="search-suggestions"></div>
                    </div>
                  </form>
                  <div data-w-id="108e4025-824f-59fd-ba99-015fe13c7bcd" class="close-icon-white">close</div>
                </div>
              </div>
            </div>
            <div data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="query Dynamo2 {
  database {
    id
    commerceOrder {
      comment
      extraItems {
        name
        pluginId
        pluginName
        price {
          value
          unit
          decimalValue
          string
        }
      }
      id
      startedOn
      statusFlags {
        hasDownloads
        hasSubscription
        isFreeOrder
        requiresShipping
      }
      subtotal {
        value
        unit
        decimalValue
        string
      }
      total {
        value
        unit
        decimalValue
        string
      }
      updatedOn
      userItems {
        count
        id
        price {
          value
          unit
          decimalValue
          string
        }
        product {
          id
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_ec_product_type_2dr10dr {
            id
            name
          }
          f_name_
          f_sku_properties_3dr {
            id
            name
            enum {
              id
              name
              slug
            }
          }
        }
        rowTotal {
          value
          unit
          decimalValue
          string
        }
        sku {
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_main_image_4dr {
            url
            file {
              size
              origFileName
              createdOn
              updatedOn
              mimeType
              width
              height
              variants {
                origFileName
                quality
                height
                width
                s3Url
                error
                size
              }
            }
            alt
          }
          f_sku_values_3dr {
            property {
              id
            }
            value {
              id
            }
          }
          id
        }
        subscriptionFrequency
        subscriptionInterval
        subscriptionTrial
      }
      userItemsCount
    }
  }
  site {
    id
    commerce {
      businessAddress {
        country
      }
      defaultCountry
      defaultCurrency
      quickCheckoutEnabled
    }
  }
}" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper pointer"
              data-node-type="commerce-cart-wrapper"><a
                class="w-commerce-commercecartopenlink cart-button w-inline-block" role="button" aria-haspopup="dialog"
                aria-label="Open cart" data-node-type="commerce-cart-open-link" href="#"><img src="images/cart.png"
                  loading="lazy" alt="" class="icon-svg-20-px" />
                <div
                  data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                  class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
              </a>
              <div style="display:none"
                class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar"
                data-node-type="commerce-cart-container-wrapper">
                <div data-node-type="commerce-cart-container" role="dialog"
                  class="w-commerce-commercecartcontainer cart-container">
                  <div class="w-commerce-commercecartheader cart-header">
                    <h4 class="w-commerce-commercecartheading _24px-text">Your Cart</h4><a
                      class="w-commerce-commercecartcloselink close-button w-inline-block" role="button"
                      aria-label="Close cart" data-node-type="commerce-cart-close-link">
                      <div class="close-icon-white-static">close</div>
                    </a>
                  </div>
                  <div class="w-commerce-commercecartformwrapper">
                    <form style="display:none" class="w-commerce-commercecartform" data-node-type="commerce-cart-form">
                      <script type="text/x-wf-template"
                        id="wf-template-c3bc403f-e038-7da7-8235-50266ba9683f">%3Cdiv%20class%3D%22w-commerce-commercecartitem%20no-padding%22%3E%3Cdiv%20class%3D%22cart-item-wrapper%22%3E%3Cdiv%20class%3D%22mask-10px-rounded%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20cart-thumbnail%20w-dyn-bind-empty%22%2F%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%20cart-info-wrapper%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20_24px-text%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cp%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%20class%3D%22_14px-text-500%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fp%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-c3bc403f-e038-7da7-8235-50266ba96845%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%7D%7D%2C%7B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%7D%5D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-c3bc403f-e038-7da7-8235-50266ba96845%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22cart-qty-remove-icon-wrapper%22%3E%3Cinput%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%2C%7B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%7B%2522fields%2522%253A%7B%2522product%3Aec-product-type%2522%253A%7B%2522ne%2522%253A%2522e348fd487d0102946c9179d2a94bb613%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22w-commerce-commercecartquantity%20cart-quantity-border%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-item%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%20class%3D%22remove-button-icon-cart%22%3Edelete%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E</script>
                      <div class="w-commerce-commercecartlist cart-list"
                        data-wf-collection="database.commerceOrder.userItems"
                        data-wf-template-id="wf-template-c3bc403f-e038-7da7-8235-50266ba9683f">
                        <div class="w-commerce-commercecartitem no-padding">
                          <div class="cart-item-wrapper">
                            <div class="mask-10px-rounded"><img
                                data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                                src="" alt=""
                                class="w-commerce-commercecartitemimage cart-thumbnail w-dyn-bind-empty" /></div>
                            <div class="w-commerce-commercecartiteminfo cart-info-wrapper">
                              <div
                                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                                class="w-commerce-commercecartproductname _24px-text w-dyn-bind-empty"></div>
                              <p data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D"
                                class="_14px-text-500">$ 0.00 USD</p>
                              <script type="text/x-wf-template"
                                id="wf-template-c3bc403f-e038-7da7-8235-50266ba96845">%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
                              <ul
                                data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                                class="w-commerce-commercecartoptionlist"
                                data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                                data-wf-template-id="wf-template-c3bc403f-e038-7da7-8235-50266ba96845">
                                <li><span
                                    data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"
                                    class="w-dyn-bind-empty"></span><span>: </span><span
                                    data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"
                                    class="w-dyn-bind-empty"></span></li>
                              </ul>
                            </div>
                            <div class="cart-qty-remove-icon-wrapper"><input aria-label="Update quantity"
                                data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aec-product-type%22%3A%7B%22ne%22%3A%22e348fd487d0102946c9179d2a94bb613%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D"
                                class="w-commerce-commercecartquantity cart-quantity-border" required=""
                                pattern="^[0-9]+$" inputMode="numeric" type="number" name="quantity" autoComplete="off"
                                data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1" /><a
                                href="#" role="button"
                                data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                class="remove-item w-inline-block" data-wf-cart-action="remove-item"
                                data-commerce-sku-id="" aria-label="Remove item from cart">
                                <div class="remove-button-icon-cart">delete</div>
                              </a></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-commerce-commercecartfooter">
                        <div aria-atomic="true" aria-live="polite" class="w-commerce-commercecartlineitem">
                          <div class="sub-total-text">Subtotal</div>
                          <div
                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                            class="w-commerce-commercecartordervalue sub-total-text"></div>
                        </div>
                        <div>
                          <div data-node-type="commerce-cart-quick-checkout-actions" style="display:none"
                            class="web-payments-button-wrapper"><a data-node-type="commerce-cart-apple-pay-button"
                              role="button" aria-label="Apple Pay" aria-haspopup="dialog"
                              style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat"
                              class="w-commerce-commercecartapplepaybutton apple-pay-button _60px" tabindex="0">
                              <div></div>
                            </a><a data-node-type="commerce-cart-quick-checkout-button" role="button" tabindex="0"
                              aria-haspopup="dialog" style="display:none"
                              class="w-commerce-commercecartquickcheckoutbutton apple-pay-button _60px"><svg
                                class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                <defs>
                                  <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                                  <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443">
                                  </polygon>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                  <path fill="#4285F4"
                                    d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                                  </path>
                                  <path fill="#34A853"
                                    d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                                  </path>
                                  <g transform="translate(0 4)">
                                    <mask id="google-mark-b" fill="#fff">
                                      <use xlink:href="#google-mark-a"></use>
                                    </mask>
                                    <path fill="#FBBC04"
                                      d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                      mask="url(#google-mark-b)"></path>
                                  </g>
                                  <mask id="google-mark-d" fill="#fff">
                                    <use xlink:href="#google-mark-c"></use>
                                  </mask>
                                  <path fill="#EA4335"
                                    d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                    mask="url(#google-mark-d)"></path>
                                </g>
                              </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                  <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                                  <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                                  <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                                  <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                                </g>
                              </svg>
                              <div>Pay with browser.</div>
                            </a></div>
                          <div class="primary-button user-button"><a href="/checkout" value="Continue to Checkout"
                              class="w-commerce-commercecartcheckoutbutton custom-button black"
                              data-loading-text="Hang Tight..." data-node-type="cart-checkout-button">Continue to
                              Checkout</a>
                            <div class="absolute-hover-bottom"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="w-commerce-commercecartemptystate">
                      <div aria-label="This cart is empty" aria-live="polite">No items found.</div>
                    </div>
                    <div aria-live="assertive" style="display:none" data-node-type="commerce-cart-error"
                      class="w-commerce-commercecarterrorstate">
                      <div class="w-cart-error-msg"
                        data-w-cart-quantity-error="Product is not available in this quantity."
                        data-w-cart-general-error="Something went wrong when adding this item to the cart."
                        data-w-cart-checkout-error="Checkout is disabled on this site."
                        data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                        data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                        Product is not available in this quantity.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pointer"><button class="log-button" data-wf-user-logout="logout" data-wf-user-login="login"
                type="button">logout</button></div>
            <div data-w-id="c83eb7d7-4575-cda2-4005-1e693e785387" class="hamburger-menu w-nav-button">
              <div class="bars">
                <div class="bar-wrapper">
                  <div class="hamburger-line _1"></div>
                  <div class="_5px-hover-style _1"></div>
                </div>
                <div class="bar-wrapper">
                  <div class="hamburger-line _2"></div>
                  <div class="_5px-hover-style _2"></div>
                </div>
                <div class="bar-wrapper">
                  <div class="hamburger-line _3"></div>
                  <div class="_5px-hover-style _3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="banner">
      <div class="container">
        <h1 class="heading">Explore</h1>

      </div>
      <div data-w-id="86948c09-9ea6-0d24-c71d-cfb6b9e521b5" class="image-show-style">
        <div class="bg-column-mask">
          <div class="bg-color-column"></div>
          <div class="primary-color-column"></div>
        </div>
        <div id="w-node-_86948c09-9ea6-0d24-c71d-cfb6b9e521b9-b9e521b5" class="bg-column-mask">
          <div class="bg-color-column"></div>
          <div class="primary-color-column"></div>
        </div>
        <div id="w-node-_86948c09-9ea6-0d24-c71d-cfb6b9e521bc-b9e521b5" class="bg-column-mask">
          <div class="bg-color-column"></div>
          <div class="primary-color-column"></div>
        </div>
        <div id="w-node-_86948c09-9ea6-0d24-c71d-cfb6b9e521bf-b9e521b5" class="bg-column-mask">
          <div class="bg-color-column"></div>
          <div class="primary-color-column"></div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="_2-column-block-top">
          <div class="full-width w-dyn-list">
            <div role="list" class="_2-column-grid w-dyn-items">
              <?php foreach ($places as $place): ?>
                <div role="listitem" class="w-dyn-item">
                  <div data-w-id="3aa9b968-98e2-906a-c7d1-034fdca8e2e9" class="blog-card">
                    <div class="blog-thubnail-mask">
                      <a href="/place/<?php echo htmlspecialchars($place['id']); ?>" class="mask-10px-rounded-full w-inline-block">
                        <img src="<?php echo htmlspecialchars($place['image_url']); ?>"
                          loading="lazy"
                          alt="<?php echo htmlspecialchars($place['name']); ?>"
                          class="blog-thumbnail-300px" />
                      </a>

                      <?php if (!empty($place['category_name'])): ?>
                        <a href="/blog-categories/<?php echo strtolower(htmlspecialchars($place['category_name'])); ?>"
                          class="blog-category w-inline-block">
                          <div class="blog-category-left-shape"></div>
                          <div><?php echo htmlspecialchars($place['category_name']); ?></div>
                          <div class="blog-category-right-shape"></div>
                        </a>
                      <?php endif; ?>

                      <div class="image-show-style">
                        <div class="bg-column-mask">
                          <div class="bg-color-column"></div>
                          <div class="primary-color-column"></div>
                        </div>
                      </div>
                    </div>

                    <div class="w-layout-vflex blog-body">
                      <div class="w-layout-vflex heading-category-wrapper">
                        <div class="horizontal-left-center-8px-gap-wrap">
                          <p class="_14px-text"><?php echo htmlspecialchars($place['business_name']); ?></p>
                          <div class="_5px-circle"></div>
                          <div class="horizontal-left-center-5px-gap">
                            <p class="_14px-text"><?php echo htmlspecialchars($place['city'] ?? ''); ?></p>
                          </div>
                        </div>

                        <a href="/place/<?php echo htmlspecialchars($place['id']); ?>" class="w-inline-block">
                          <h3 class="_24px-link"><?php echo htmlspecialchars($place['name']); ?></h3>
                        </a>

                        <div class="blog-divider">
                          <div class="blog-hover-divider"></div>
                        </div>
                      </div>

                      <a href="/place/<?php echo htmlspecialchars($place['id']); ?>" class="text-link-with-border w-inline-block">
                        <div>Read More</div>
                        <div class="mask">
                          <div class="link-border"></div>
                          <div class="link-border-secodnary"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Categories Sidebar -->
          <div class="blog-sidebar">
            <form action="/search" class="sidebar-search-filter w-form">
              <input class="sidebar-search-input w-input" maxlength="256" name="query" placeholder="Search…" type="search" id="search-3" required="" />
              <input type="submit" class="sidebar-search-icon w-button" value="search" />
            </form>

            <div class="blog-widget">
              <div class="sidebar-title">Categories</div>
              <div class="w-dyn-list">
                <div role="list" class="category-container w-dyn-items">
                  <div role="listitem" class="w-dyn-item">
                    <a href="/blog-categories/adventure.php" class="sidebar-category-block w-inline-block">
                      <div class="icon">navigate_next</div>
                      <div>Adventure</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="/blog-categories/cultural.php" class="sidebar-category-block w-inline-block">
                      <div class="icon">navigate_next</div>
                      <div>Cultural</div>
                    </a>
                  </div>
                  <div role="listitem" class="w-dyn-item">
                    <a href="/blog-categories/nature.php" class="sidebar-category-block w-inline-block">
                      <div class="icon">navigate_next</div>
                      <div>Nature</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div data-w-id="3447bad0-4c97-caf6-2cc4-1b7d3321ffb7" class="footer-container">
          <div class="footer-block">
            <div class="site-logo" style="font-size: 35px; font-weight: bold; color:rgb(255, 255, 255);">VisitVista</div>
            <div class="margin-bottom-23px">
              <p class="footer-text">Ready to elevate your online presence? Contact us today to discuss your project and
                discover how we can bring your vision to life.</p>
            </div>
          </div>
          <div class="footer-block end">
            <div class="link-list"><a data-w-id="ae4630f3-25c8-1af0-bf6f-a34696446e8b" href="/"
                class="footer-link-wrapper w-inline-block">
                <div class="footer-link">
                  <div class="text">Home</div>
                  <div class="text">Home</div>
                </div>
                <div class="mask">
                  <div class="nav-border"></div>
                </div>
              </a><a data-w-id="ae4630f3-25c8-1af0-bf6f-a34696446e8b" href="/about-us-1"
                class="footer-link-wrapper w-inline-block">
                <div class="footer-link">
                  <div class="text">About</div>
                  <div class="text">About</div>
                </div>
                <div class="mask">
                  <div class="nav-border"></div>
                </div>
              </a><a data-w-id="ae4630f3-25c8-1af0-bf6f-a34696446e8b" href="/portfolio-1"
                class="footer-link-wrapper w-inline-block">
                <div class="footer-link">
                  <div class="text">Article</div>
                  <div class="text">Article</div>
                </div>
                <div class="mask">
                  <div class="nav-border"></div>
                </div>
              </a><a data-w-id="ae4630f3-25c8-1af0-bf6f-a34696446e8b" href="/utility/license"
                class="footer-link-wrapper w-inline-block">
                <div class="footer-link">
                  <div class="text">Explore</div>
                  <div class="text">Explore</div>
                </div>
                <div class="mask">
                  <div class="nav-border"></div>
                </div>
              </a></div>
            <div class="social-icons-container"><a href="http://instagram.com" target="_blank"
                class="social-icon-wrapper w-inline-block"><img src="images/group-2027181.png" loading="lazy" alt=""
                  class="footer-icon" /></a><a href="http://linkedin.com" target="_blank"
                class="social-icon-wrapper w-inline-block"><img src="images/group-2027180.png" loading="lazy" alt=""
                  class="footer-icon" /></a><a href="http://tiktok.com" class="social-icon-wrapper w-inline-block"><img
                  src="images/vector-20-1-.png" loading="lazy" alt="" class="footer-icon" /></a><a
                href="http://dribble.com" target="_blank" class="social-icon-wrapper w-inline-block"><img
                  src="images/vector.avif" loading="lazy" alt="" class="footer-icon" /></a></div>
          </div>
        </div>
      </div>
      <div data-w-id="9fe381cd-c836-00c2-b807-19331181b79b" class="site-line-wrapper">
        <div class="line">
          <div class="line-infinity _1"></div>
        </div>
        <div class="line">
          <div class="line-infinity _2"></div>
        </div>
        <div class="line _3">
          <div class="line-infinity _3"></div>
        </div>
      </div>
    </footer>
  </div>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/webflow-script.js" type="text/javascript"></script>
  <?php
  echo getSearchScripts();
  ?>
</body>

</html>