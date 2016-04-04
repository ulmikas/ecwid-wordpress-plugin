<?php

$faqs = array(
	array(
		'title' => __( 'How secure is this plugin? Is my store PCI DSS compliant?', 'ecwid-shopping-cart' ),
		'body' => __(
'Ecwid is PCI DSS Level 1 certified, which is the gold standard for e-commerce solutions worldwide. This means that when selling online with Ecwid, you won\’t have any problems with the bank you do business with. <a target="_blank" href="https://help.ecwid.com/customer/portal/articles/1085017-wordpress-downloadable#secureplugin">More details.</a>'			, 'ecwid-shopping-cart'
		),
		'priority' => 'newbie_with_woo'
	),
	array(
		'title' => __( 'How can I manage my store from my mobile device?', 'ecwid-shopping-cart' ),
		'body' => __(
'Ecwid provides free mobile applications for iOS and Android to manage your store and sell on the go. Scan products, track inventory, manage sales and accept payments using your mobile device as a POS station. <a target="_blank" href="https://www.ecwid.com/ecwid-mobile">More details.'
			, 'ecwid-shopping-cart'
		),
		'priority' => 'newbie_with_woo'
	),
	array(
		'title' => __( 'How to set up a storefront on Facebook with Ecwid?', 'ecwid-shopping-cart' ),
		'body' => __(
'You can add your online store to your Facebook business page. No addons needed. Ecwid will automatically synchronize products, customers, orders and inventory between your WordPress and Facebook storefronts. <a href="https://help.ecwid.com/customer/portal/articles/1085017-wordpress-downloadable#How%20to%20add%20my%20store%20to%20Facebook">More details.</a>'
			, 'ecwid-shopping-cart'
		),
		'priority' => 'newbie_with_woo'
	),
	array(
		'title' => __( 'How can I add a cart widget to my site sidebar?', 'ecwid-shopping-cart' ),
		'body' => sprintf(
			__(
'You can add product search box, cart widget and more on the <a href="%s">"Appearance / Widgets page"</a> here in your site admin. <a target="_blank" href="https://help.ecwid.com/customer/portal/articles/1085017-wordpress-downloadable#Sidebar%%20widgets">More details.</a>'
			, 'ecwid-shopping-cart'
			),
			admin_url("widgets.php")
		)
	),
	array(
		'title' => __( 'How much does Ecwid cost?', 'ecwid-shopping-cart' ),
		'body' => __(
'Our 4 account types vary by number of products, types of functionality, and level of support. For more information, check out our <a target="_blank" href="https://www.ecwid.com/pricing">pricing page. </a>
<br />Free - Up to 10 products
<br />Venture - $15/month
<br />Business  - $35/month
<br />Unlimited - $99/month
You can also save money by enrolling in our annual plans.'
			, 'ecwid-shopping-cart'
		)
	),
	array(
		'title' => __( 'I want to add store categories to the site menu. How do I do that?', 'ecwid-shopping-cart' ),
		'href' => '/customer/en/portal/articles/1497401--how-will-i-receive-payments-from-my-customers-',
		'body' => __(
'You can add the store categories menu right to your site menu for your customers to easily get to the category of products they are interested in right from the site menu. Just open "Appearance -> Menus" in your WordPress control panel and add the "Store with Categories Menu" item to your site menu. A drop-down menu containing your store categories will automatically appear on your site.'
			, 'ecwid-shopping-cart'
		)
	),
	array(
		'title' => __( 'How do I put my products in the sitemap?', 'ecwid-shopping-cart' ),
		'body' => __(
'To create sitemap for your Wordpress site we suggest using <a target="_blank" href="https://wordpress.org/plugins/google-sitemap-generator/">Google XML Sitemaps</a>  or <a target="_blank" href="https://wordpress.org/plugins/wordpress-seo/">Yoast Wordpress SEO</a>. &nbsp;plugins. These plugins are fully compatible with Ecwid and allow to generate a sitemap that will contain links to categories and product pages, so the store pages will get indexed faster. Please note that this option is available to <a href="https://www.ecwid.com/pricing">paid Ecwid users</a>.'			, 'ecwid-shopping-cart'
		)
	),
	array(
		'title' => __( 'How to add a single product with the add to bag button to the site pages?', 'ecwid-shopping-cart' ),
		'body' => __(
'To feature a single product on a separate page or blog post of your site, use <b>[ecwid_product]</b> shortcode. <a target="_blank" href="https://help.ecwid.com/customer/portal/articles/1085017-wordpress-downloadable#Howtoembedasingleproductonapageorpostofmysite">How to use it.</a>'
			, 'ecwid-shopping-cart'
		)
	),
	array(
		'title' => __( 'Is it possible to display my store on the site home page?', 'ecwid-shopping-cart' ),
		'body' => __(
'You can display your store on the site main page – adjust the "Reading" settings of your site as described in our <a href="https://help.ecwid.com/customer/portal/articles/1085017-wordpress-downloadable#displaystoreonhomepage">Help Center.</a>'
			, 'ecwid-shopping-cart'
		)
	)
);