<!-- .slide: data-background="gfx/target-1.jpg" -->
# :target <!-- .element: style="color: hsl(75,94%,41%); margin-top: 6em" -->


<!-- .slide: data-background-video="gfx/target-scrolling.webm" -->
Note: I needed more layouts. It's nice to scroll through things, but not always. Sometimes you want to see things next to each other. In columns, for instance


<!-- .slide: data-background="gfx/target-columns.png" data-background-size="contain" -->


![Target URL](gfx/target-url.png)


```html
<html id="g">
	…
</html>
```


```
vasilis.nl/#g
```

```html
<html id="g">
	…
</html>
```

```css
html:target body {
	columns: 15em;
}
```


<!-- .slide: data-background-video="gfx/target-column-scroll.webm" -->
Note: Very, very nice indeed. But still it takes quite a long time to view all images, right?


<!-- .slide: data-background="gfx/target-all.png" data-background-size="contain" -->


<!-- .slide: data-background="gfx/target-url-m.png" data-background-size="auto" -->


```
vasilis.nl/#m
```

```html
<body id="m">
	…
</body>
```

```css
body:target {
	height: 100vh;
	display: flex;
	flex-wrap: wrap;
}
…
```


<!-- .slide: data-background="gfx/target-all.png" data-background-size="contain" -->


<!-- .slide: data-background="gfx/target-description-1.png" data-background-size="contain" -->


<!-- .slide: data-background="gfx/target-description.png" data-background-size="542px auto" -->


<!-- .slide: data-background="gfx/target-url-t.png" data-background-size="auto" -->


```html
<html id="g">
	…
	<body id="m">
		…
	</body>
</html>
```


```html
<html id="g">
	<head id="t">
		…
	</head>
	<body id="m">
		…
	</body>
</html>
```


```
vasilis.nl/#t
```

```html
<head id="t">
	…
</head>
<body>
	…
</body>
```

```css
head:target + body svg{
	display: none;
}
```


<!-- .slide: data-background="gfx/target-text-only.png" data-background-size="contain" -->
