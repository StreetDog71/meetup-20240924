# meetup-20240924
A basic custom block developed during the WordPress Meetup on 24-09-2024 in Lisbon


# To get started

1. To install the node_modules, open the terminal in the plugin root folder and run this command:

npm install


2. To compile the src folder into the build folder run this command:

npm start

This command will keep running and will compile any change you make to the files in the src folder


3. To compile and minimize your block for production run this command:

npm run build

This command will run only once.


# References:

Tutorial - How to create a custom block:
https://developer.wordpress.org/block-editor/getting-started/tutorial/

Block components reference (Storybook):
https://wordpress.github.io/gutenberg/?path=/docs/docs-introduction--page

Create Block Script:
https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/

Static vs Dynamic blocks:
https://developer.wordpress.org/news/2023/02/27/static-vs-dynamic-blocks-whats-the-difference/


# Keep in mind

This block was developed in under 40 minutes, in front of a live audience, under a lot of pressure. It's not supposed to be a functional block, it's just an example of how to create a basic dynamic block.
Use it to learn the basics and start building your own blocks.
