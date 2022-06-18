var url = 'assets/js/shopwidget.js';
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = url;
var options = {
    "enabled": true,
    "chatButtonSetting": {
        "backgroundColor": "#4dc247",
        "ctaText": "Contact Us",
        "borderRadius": "25",
        "marginLeft": "0",
        "marginBottom": "50",
        "marginRight": "50",
        "position": "right"
    },
    "brandSetting": {
        "brandName": "InfinityJaze",
        "brandSubTitle": "Typically replies within never",
        "brandImg": "assets/img/Youtube Profile.jpg",
        "welcomeText": "Hi, there!\nHow may I help you?",
        "messageText": "Hello, I have a question about {{page_link}}",
        "backgroundColor": "#0a5f54",
        "ctaText": "Start Chat",
        "borderRadius": "25",
        "autoShow": false,
        "phoneNumber": "62786874"
    }
};
s.onload = function () {
    CreateWhatsappChatWidget(options);
};
var x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);