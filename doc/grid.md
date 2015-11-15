#Grid System

###For what do I need the ***Grid System***?

You can use it to position elements on your site.

###How to use the ***Grid System***?

First you can set the height of it:

ˋˋˋini

[Grid]
grid-height=50%

ˋˋˋ

Then you can set the amount of elements in your grid (for example: 4):

ˋˋˋini

[Grid]
grid-height=50%
grid-parts=4


ˋˋˋ

Now you can set the width of each element in your grid:

ˋˋˋini

[Grid]
grid-height=50%
grid-parts=4
grid-props=1-2-1

ˋˋˋ

The example above will produce a grid with **three parts**. The first one is 1x, the second 2x and the third 1x long.(1+2+1=4 so you have to write *4 parts*)

###How to put elements in the ***Grid***?

You can put an element into the Grid like this:

ˋˋˋini

[#YourElement]
grid-position=1

ˋˋˋ
Now the element with the **ID** *YourElement* will be the first part (1x long) of the grid. When you want to put an element in the Grid which uses classes you can just replace the **#** to **.**. When you want to put all types of an element in the Grid do not use any of these characters("#" or "."). For example just write *div*  into the tags.