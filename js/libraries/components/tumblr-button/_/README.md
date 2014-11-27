# &lt;tumblr-button&gt;

Web Component wrapper for tumblr-button's share button using Polymer.

> Maintained by [Gustavo Isensee](https://github.com/gustavoisensee).

## Demo

![Tumblr-button](http://platform.tumblr.com/v1/share_1.png)
> [Check it live](http://gustavoisensee.github.io/tumblr-button).

## Usage

1. Import Web Components' polyfill:

	```html
	<script src="http://cdnjs.cloudflare.com/ajax/libs/polymer/0.0.20130816/polymer.min.js"></script>
	```

2. Import Custom Element:

	```html
	<link rel="import" href="src/tumblr-button.html">
	```

3. Start using it!

	```html
	<tumblr-button></tumblr-button>
	```

## Options

Attribute     | Options                   | Default           | Description
---           | ---                       | ---               | ---
`url`         | *string*                  | `goo.gl/NCRxm7`               | url to share. don't use http or https in url
`title`       | *string* 	              | `tumblr-button`  | title to share
`size`        | `1`![1](http://platform.tumblr.com/v1/share_1.png),`2`![2](http://platform.tumblr.com/v1/share_2.png),`3`![3](http://platform.tumblr.com/v1/share_3.png),`4`![4](http://platform.tumblr.com/v1/share_4.png)  | `1`  | size of button
`color`       | `blue`, `gray` 	          | `blue`            | color of button

 

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## History

* v0.0.3 September 06, 2013

* Started project using [boilerplate-element](https://github.com/customelements/boilerplate-element)

## License

[MIT License](http://opensource.org/licenses/MIT)