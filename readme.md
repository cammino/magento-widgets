# Magento Widgets

Is a module for Magento thats allow to add some widgets in your store.
Some of include widgets:
- Full Banners
- Mini Banners
- List Category Products
- List New Products
- List Best Seller Products
- List Categories

# Instalation
**Important:** This modules depends of [Cammino Magento Banners](https://github.com/cammino/magento-banners) module



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
- **area_id (required):** Banner id
- **html_id (required):** Id for the banner HTML element
- **html_class:** Class for the banner HTML element

**Example:** {{block type="camminowidgets/fullbanners" template="widgets/full-banners.phtml" area_id="full-banners" html_id="home_full_banners" html_class="home-banners"}}