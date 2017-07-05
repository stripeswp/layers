=== Layers ===

Contributors: stripeswp, bhadaway
Plugin link: https://stripeswp.com/
Tags: layer, layers, section, sections, panel, panels
Requires at least: 2.5
Tested up to: 4.8
Stable tag: trunk
License: https://www.gnu.org/licenses/gpl.html

Add layered content sections.

== Description ==

The simplest and most elegant way of adding full-width, layered content areas to your website. As many layers and colors as you like.

== Installation ==

1. Install and activate the plugin.
1. Create a new page or edit an existing one.
1. Under Page Attributes, change the Template to Layers and save.
1. Now, add as many content sections as you like by adding the `[layer]...[/layer]` shortcode into the content area of your page.

Example with all the optional parameters:

`[layer id="" class="" color="" padding="" background-color=""]
Hello World!
[/layer]`

You may add whatever id you like and as many classes (space-separated) as you like.

Built-in classes include:

`left`
`center`
`right`
`layer-inner`
`force-white-text`
`force-black-text`

**layer-inner** creates a more narrow content area within the layer, if needed.

**force-white-text** and **force-black-text** can override theme styles to force all text within the layer to be white or black, if and when needed.

For *color*, *padding*, and *background-color* parameters, you may treat this just like normal CSS, adding either a color name like `red` or color code like `#ff0000`.

I've tried to think of and address common pitfalls that might occur with themes and tested with the most popular themes to work out wonky design issues. Even so, there are just too many variables. It's inevitable that this plugin will break someone's design on the Layers page only (as everything is self-contained), so I'll be available to support you by either adding updates to the plugin or offering you custom CSS for your unique situation.