<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092600600197",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDPifZibKkAtTc/VZFAO2J/JgcDPqLICzGLF3KaM7ke/Aq7HvkZYeDw5OA3O2VNHGV1lRQGBhlxN4cXzTuuATXjwYkFcTsY9KfvboSzwxl1SOGnA8YROTQunXQMz3g5+2fjSVYfMD/lymFxw4w/t6sRBln+KMnCJEUvvDhDO7WtlWbNl8dd/hP/5ZUJeKzBptmic96JeuicJ1rmkz2fIN2Ru7kVpOI1e2smmvZAYErei89PAP6pG59b1tePgQqXrCAG5NHqEhOgTmFQkiVzJPT5g9JTSv24SvrIV2bawFr2tiYKnt2R17oNGoLblAyJSfGIwooLwuULTCyCRPMDJkmHAgMBAAECggEBAMub5oUZZZS0NMeGA0KpADEN9cNRKBJqKOj00BJIvE2RqFV8RZaJWE39vZtyQigsu71nzIU8ZqmUeIz5ZJuJxHz12p/kPr51CGz2WGqj9c4C+p8ILMGpBXDWOIx43tLDu2BZCoz+oTGoI4Gg/29jmgjR2mhnS8mUG+yBFBGh+tOYAhcDiYinlK5w8HmGo/GFLjgHGMrQlNzHXOMrffNU2hhTJ+ImG8Iy7aPMYwsT95tBu3EwAi79uFhpbZ0zwDMMPeUezGSds0earcIJqLbHWlk/gS12HT5ALd2wPxQQM6N9mm79iaPcJ8bLzDYg8mqEYkA8z/aK+el7EFpZ+MtTBMECgYEA98G01zv5FNXT3PuZmbQZrsD2nj2CSOwnNSIuAHXtptqUm3nPWbgEGBCDu/JrlCO0M17RV0m6unUgPXFrHLj/2mjX3RzeisrMqkY2hoaB/IQYSub3+PxN++1dxhIbTId6GwUQhuAZqZpKqLP35J6mfqEV5kHUoUoyD7ON62Se3f0CgYEA1nGydMAyDApqyItHZuuftPEDH+1Eh65b+OBsn9A5b2ypCrsW719/er95qDrxnQcfwrkhh5ZrmWr1ZDpt2llR5vIffQ3CI649j45ju3ZuWG2sJf90Y6t3jFp9KSDAi+M0iLnXoRCTnzt4NqWxt9AsdckBBEn/p4fwQDTC/myyOtMCgYBPH7vjaTHZJ5jr4CZj4hK5rsKUMsyjAVhcLbhHSWJGgVQoezRvUMdt8AhCQ997hhOMvGFa4R8TYUiUlt5AZAzB8e3OneOsq6vFTXsoZ1ioDn+7nBvhlqJJLLtgAHRbcoDalDl8+aD4e2AQlLk8eDZwBn359Vg00n8+aHeQj6f0+QKBgQCLG2wpIjgU6XkFqJvj3rtWM/XT8yU+YtPUqTitnvRzHGi3xk+FbkySwrzXbY0oUOPAfDmM6/3WorSWlPSH7OMdTjkw9QjX/oJ+ql51z8ia4mIGsCS/Nw6w5E5GrLFazUNZ4jxHhipM49YClQ+o7oi4y3A2aQ5Hjf5CmDdZtgcT8wKBgBEC7OHSF9orWXizbcjAB+V/kjBd4won4enPBfM0O6xFcexbOMtcjfXkOcrnsR9RwNHxuxIyEcGgOHoaRhcsXY2ExCGjF6eh7gln4YZcMQyuSezRHGo3eYHvI82oZUeRU6NGC338wOtHqlpsT5/smxyce3T4lW/EPyejDcAO6gyk",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://localhost/alipay.trade.wap.pay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvaU36I6LO2TYxQ/E+21d8+DYSbHx2RpALBYo9yz+HzSeGz7gTqTengphMZ6nji90eadhzgxnNXNXrKBLa0s6N6hSIk3ZcV6tcUTd2kfKz7yIlY7pzzcoS/aTJCPKH40GKI+yHdroyuruGrnPlyyQojeRnVFQKO0oBG7pBIQv9w7Vc4rbActup9dyeQl7HyO7PZCF6TTzXkdh9r9ApFIGCX/hITmK5Aa8x8B/7NCwPfbsuEU8HTHc+qzrM14Pb3YfZiIWY8jOqeovEAnfaQA0rpT3Tm98be6v7l9InUDvpDSqFanetdXFHHDK470BSAwfa9aEK2kBXGa5zejnt+FgjQIDAQAB",
		
	
);