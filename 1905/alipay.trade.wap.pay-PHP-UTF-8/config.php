<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016101400684203",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA5rrgWyqlNM5uBUqG3GDi+tR6r1zgYrOVku3UUVyJ6qiFAU0D2HwK4wDuq+bV3AfWYXQUg4kSwGIofQ2f0TSyd6yZI82mpbkiMF5wYieDwSiUiG/am+okPKOV09p8t/q65mZdKO94n7aoO2QCjNIsK1+KwIWUKQ65UTH8GQJWMVWY74qX+GA5U0vaXrUttlqoyks5l8xM314RvXKz8R0/JVB+5JZETGCMShcU4JCwg5JfuIGX1NIwcgakuVuHUv3OefGRIhWhQLt4w5ep20sTbxqg9Hal6VSmJmKh2+OqLEE6U0TI0AVZNK64NO9Yy69IjZlTKFWTXatWUyMUcEycvQIDAQABAoIBACH4Z6nkiHhS4E31IA/4T9LgT8Pb58mAaUg9reHgvwmGkDaV0TghYzTy4TD8BoajvMOSZKbNGq6qhQ2MYPhbSt9l0RI9aAjETi1S6jb5XGOnBt9joIsOGRG4gAm2BGDOEJB1h8fMIjVZnkFIQzvagdhM88/OmvbEjTJQKq6/8lLG4PEWffFkzrRwFMNlq08DJOm8x71hgcg2OsrVoBzOGQVU5295ZJLYhYpID5MAfQK6Ep7SR2Zg+O6S8GBbTLGA8tZlJ/tBxviBMq+2vdSBVv0Cgvay4VKWAeZ6o2Hc9pNuy1ERQoc4KpjJeVSCE+HqnAGxZlzULi7uSCeUNg/XSIECgYEA9QK6KLFnjSdyMaEO2hKh9H5s6lqnPDAZzSSz2wTW5YtFxuZ8OW4dQRiR3l4wL6pkaSMsRQy+bKOqaRuZY322Tn16oZR6h9ac7bz/w59vd4II4tLRVvmpi8F+2qh1u5lADrgxSpiI9dxgbKwV+1A82T72JLH797A4AhjnAUvQy10CgYEA8RQs0M8i6F07BgMSDSeLEpClQTMVOMEYaWTQEUpZWdsLoICdDW93QhkzqOJCXQ1PrNsWLFIA1wAOhjAPbJZG7wlwRDQRvbBDcWYe+2YyfF8B+90zAtvXPPpaPmtEvmjWK3oOVIX//Oi2qna+c735bYWFESpuAqRxroslMBYzYOECgYEA0duCJDS/41F0KDoxhGwNOGPJWnpHX/A7SVE0lFZy0q4WGCV3JaHBgO5QkszOLSWfV8Z+tq4RtPACmIDBQ0x8CILFtPx+bzdNtvv5fk9jpFNG1TGJiRvTMxeLVjKQlRzQl0sBPUmlliEqnipPsbCqTdH19rxUe3T+pB08UAnmTykCgYBWnFHxfsliw8PlyAqfMTq0o8TLJMgWCMF1c+OQoq5xKtIFis9huU8WLymxHgCLn7GlP1y69YcZtwqAyRlxgJfhXvm3dyF8javdPLwaw7+VkSiMTQ77kvHEFYmAbVdYNR/kpMgrM60hNpYRrfGEcZb/8v04io7VYjD5bUIiAYfZ4QKBgQDO8RciRHWfswtQ1ixP2vVtdIfc0xWlKLGgoVXYSmljtBavPkSPyGgx/0thTLzjh4rdDcrP8wfszUMArDV7mI6lA+43UvN7vICow6A0a2BbjKEOIkDSrkY88lkKSfrhGD40RrCJ+mywbuMRUHY/BlERoAADzNWWnphd+eXaa0aNjQ==",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://localhost/1905laravel/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoEfCm4Z0G9W6P6KYeR/qycWKVvqwl9UI4S7jFQsMMsKw+qxP/yg4WudnJKekwNRvgdwIJMFKMw+a92lAgNWwjh7Xpwi6zy0ZmqReKNWJZ1QLJGydUODttI5pjejshnQKgaeTXsfpAcczVfI2r1GKG9elByNJkemwqLQObmbBwHTgHzS8jxGVpA+dC3jUiB0vpT00Cvcj1eRpciDWUjwC2YSc3uDG5jHzmuLuezd/s+CZwcrUkyUae4IOcHDcIpbGvafMkTfkbtAGtz+j+B5zQlozS/L8YQ7lJuwU3xwMQNnmTZDiq446OMYIye85B0VItPe+v2NudxO07zJ+yzMXWwIDAQAB",
		
	
);