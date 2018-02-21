# Magento Widgets

Is a module for Magento thats allow to add some widgets in your store.
Some of include widgets:
- Full Banners
- Mini Banners
- List Category Products
- List Categories

# Instalation
**Important:** This modules depends of: 
- [Cammino Magento Banners](https://github.com/cammino/magento-banners)
- [Cammino Magento Themeconfig](https://github.com/cammino/magento-themeconfig)

Exec this commands from your store **root path**
```sh
$ git submodule add git@github.com:cammino/magento-widgets.git app/code/community/Cammino/Widgets
$ cp app/code/community/Cammino/Widgets/Cammino_Widgets.xml app/etc/modules/
$ cp app/code/community/Cammino/Widgets/app/design/frontend/cammino/default/template/widgets app/design/frontend/cammino/default/template/
```

## Widgets Configuration
**Important:** Set permissions for camminowidgets/blocks in admin > System > Permissions > Blocks

### Full Banner
**Definition:** Slick slider with images set in Banners
**Params:**
- **area_id (required):** Banner iD
- **html_id (required):** ID for the banner HTML element
- **html_class:** CLASS for the banner HTML element

**Example:** 
```sh
{{block type="camminowidgets/fullbanners" template="widgets/full-banners.phtml" area_id="full-banners" html_id="home_full_banners" html_class="home-banners"}}
```

### Mini Banners
**Definition:** Block of Banner images (not slick)
**Params:**
- **area_id (required):** Banner id
- **html_id:** ID for the banner HTML element
- **html_class:** CLASS for the banner HTML element
- **html_title:** Title for mini banners section
- **image_columns:** Number of columns for HTML element

**Example:** 
```sh
{{block type="camminowidgets/minibanners" template="widgets/mini-banners.phtml" area_id="mini-banners" html_id="home_mini_banners" html_class="home-mini-banners" html_title="Nossos Diferenciais" image_columns="3"}}
```

### List Category Products
**Definition:** Static block or Carousel of products from a specific category
**Params:**
- **category_id (required):** ID of the category of products to be shown
- **column_count:** Number of products that will be shown per row
- **html_id (required if CAROUSEL param is TRUE):** ID for the HTML element
- **html_class:** CLASS for the HTML element
- **html_title:** Title for category products section
- **html_subtitle:** Subtitle for category products section
- **carousel:** Define if this block will be an carousel or not (TRUE or FALSE - default is false)
- **img_dont_resize:** Define if cancel default magento product image (TRUE or FALSE - default is false)
- **img_size:** Define product image width if img_dont_resize is set FALSE (default width: 210)

**Breakpoint params for carousel (work only if carousel is true):**
- **bp_first:** first breakpoint (ex: 1000)
- **bp_second:** second breakpoint (ex: 800)
- **bp_third:** third breakpoint (ex: 600)
- **bp_fourth:** fourth breakpoint (ex: 400)
- **bp1_show:** Define how much slides will be shown in the first breakpoint
- **bp2_show:** Define how much slides will be shown in the second breakpoint
- **bp3_show:** Define how much slides will be shown in the third breakpoint
- **bp4_show:** Define how much slides will be shown in the fourth breakpoint
- **bp1_scroll:** Define how much slides will be scrollable in the first breakpoint
- **bp2_scroll:** Define how much slides will be scrollable in the second breakpoint
- **bp3_scroll:** Define how much slides will be scrollable in the third breakpoint
- **bp4_scroll:** Define how much slides will be scrollable in the fourth breakpoint

**Example:** 
```sh
{{block type="camminowidgets/listcategoryproducts" template="widgets/list-category-products.phtml" category_id="197" column_count="4" html_id="custom_id" html_class="custom-class" html_title="Meu título" html_subtitle="Meu subtítulo" carousel="true" }}
```

### List Categories
**Definition:** Static block or carousel of children categories from a specific category
**Params:**
- **category_id (required):** ID of the category of children categories to be shown
- **column_count:** Number of categories that will be shown per row (default is 5)
- **slides_to_scroll:** Number of categories that will be scrollable (default is 1)
- **html_id (required if CAROUSEL param is TRUE):** ID for the HTML element
- **html_class:** CLASS for the HTML element
- **html_title:** Title for categories section
- **html_subtitle:** Subtitle for categories section
- **carousel:** Define if this block will be an carousel or not (TRUE or FALSE - default is false)

**Breakpoint params for carousel (work only if carousel is true):**
- **bp_first:** first breakpoint (ex: 1000)
- **bp_second:** second breakpoint (ex: 800)
- **bp_third:** third breakpoint (ex: 600)
- **bp_fourth:** fourth breakpoint (ex: 400)
- **bp1_show:** Define how much slides will be shown in the first breakpoint
- **bp2_show:** Define how much slides will be shown in the second breakpoint
- **bp3_show:** Define how much slides will be shown in the third breakpoint
- **bp4_show:** Define how much slides will be shown in the fourth breakpoint
- **bp1_scroll:** Define how much slides will be scrollable in the first breakpoint
- **bp2_scroll:** Define how much slides will be scrollable in the second breakpoint
- **bp3_scroll:** Define how much slides will be scrollable in the third breakpoint
- **bp4_scroll:** Define how much slides will be scrollable in the fourth breakpoint

**Example:** 
```sh
{{block type="camminowidgets/listcategories" template="widgets/list-categories.phtml" category_id="197" column_count="4" html_id="custom_id" html_class="custom-class" html_title="Meu título" html_subtitle="Meu subtítulo" carousel="true" }}
```
