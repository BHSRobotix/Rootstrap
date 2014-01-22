// Create an array of images that you'd like to use
var images = [, 'http://farm8.staticflickr.com/7438/10451371216_789fb0fa6e_b.jpg' //
    , 'http://farm4.staticflickr.com/3716/10451360606_ab3db8bc16_b.jpg' //
    , 'http://farm8.staticflickr.com/7441/10451337574_bc235db6a2_b.jpg' //
    , 'http://farm3.staticflickr.com/2807/10451425704_3488bc0269_b.jpg' //
    , 'http://farm4.staticflickr.com/3728/11847010955_957a8f309c_b.jpg' //
    , 'http://farm3.staticflickr.com/2891/11893431033_53df28fb92_b.jpg' //
    , 'img/bs_goal.png' //High Goal Wooden Frame
    , 'http://farm3.staticflickr.com/2883/11893131065_62e7d5df5f_b.jpg' //Lego bot holding aluminum ball
    , 'http://farm8.staticflickr.com/7325/11893531834_07e66e7ec0_b.jpg' //Battery
    , 'http://farm8.staticflickr.com/7456/11893119515_0758e39306_b.jpg' //Electrical
    , 'http://farm4.staticflickr.com/3759/11893522624_15c583e4b2_b.jpg' //Whiteboard
];

// Get a random number between 1 and the number of images
var randomNumber = Math.floor((Math.random() * (images.length - 1)) + 1);
// Use the random number to load a random image
$.backstretch(images[randomNumber], {
    fade: 250
});
