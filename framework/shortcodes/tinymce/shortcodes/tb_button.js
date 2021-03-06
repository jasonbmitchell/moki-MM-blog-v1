/**
 * Required arguments
 * - link: The full URL of where you want the button to link
 *
 * Optional arguments
 *  - color: default, black, blue, brown, dark_blue, dark_brown, dark_green, green, mauve, orange, pearl, pink, purple, red, slate_grey, silver, steel_blue, teal, yellow, wheat, white
 *  - target: _self, _blank, or lightbox
 *  - size: small, medium, large
 *  - class: Any CSS classes you want to add
 *  - title: Title of link, will default to button's text
 */
themeblvdShortcodeAtts={
	attributes:[
		{
			label:"Link URL",
			id:"link",
			help:"ex: http://google.com"
		},
		{
			label:"Color",
			id:"color",
			help:"Select the color of the button.", 
			controlType:"select-control", 
			selectValues:['default', 'black', 'blue', 'brown', 'dark_blue', 'dark_brown', 'dark_green', 'green', 'mauve', 'orange', 'pearl', 'pink', 'purple', 'red', 'slate_grey', 'silver', 'steel_blue', 'teal', 'yellow', 'wheat', 'white']
		},
		{
			label:"Link Target",
			id:"target",
			help:"Select how you'd like the link to open - \"_self\" would be in the same window, while \"_blank\" would be in a new window. ", 
			controlType:"select-control", 
			selectValues:['_self', '_blank', 'lightbox']
		},
		{
			label:"Size",
			id:"size",
			help:"Select the size of the button.", 
			controlType:"select-control", 
			selectValues:['small', 'medium', 'large']
		},
		{
			label:"CSS Classes",
			id:"class",
			help:"Enter in any CSS classes you want to add to the button."
		},
		{
			label:"Title",
			id:"title",
			help:"Enter in the title of the link's anchor tag. If you leave this blank, it will just default to the text of the button."
		}
	],
	defaultContent:"Button Text",
	shortcode:"button"
};