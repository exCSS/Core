#***ANIMATION LIST***

| **Animation name** 	| **delay** 	| **duration** 	| **range** 	| **left** 	|
|:------------------:	|-----------	|--------------	|-----------	|----------	|
|       fadeIn       	|     X     	|       X      	|     -     	|     -    	|
|       fadeOut      	|     X     	|       X      	|     -     	|     -    	|
|    slideInRight    	|     X     	|       X      	|     X     	|     X    	|
|     slideInLeft    	|     X     	|       X      	|     X     	|     X    	|


###delay

The delay parameter adds an delay before the start of the animation (**s**).

```ini

[#YourElement]
animation="yourAnimation"
animation-parameter="delay:1s"

```

###duration

The duration parameter sets the duration of the animation (**s**).

```ini

[#YourElement]
animation="yourAnimation"
animation-parameter="duration:1s"

```

###range

The range parameter says how much px(for example) the element will float to the right/left (**px/em/%/vw...**).

```ini

[#YourElement]
animation="yourAnimation"
animation-parameter="range:100px"

```

###left

The left parameter sets the distance of the object in normal state (from left) (**px/em/%/vw...**).

```ini

[#YourElement]
animation="yourAnimation"
animation-parameter="left:50px"

```