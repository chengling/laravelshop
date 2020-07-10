<?php

return [
    'alipay' => [
        'app_id'         => '2016092600597744',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn6R3bOIaBLM1eNvMrZE7XfkjYk+Wbh0u0HeCki4Wd7aVDm8X/c9y3tZvh1Z6s7tiaGYScPdqnE/sV/TqyuN20Bk/TMLh/qvFeSoWtwE1SXB/6Kthu0pjBD+zsCCZQn644/GhDVr7TTGcDHhWypuMZ/HI/4eagbLsKRzWJmlhukEkN4QFaR291J35y3XMuV2n4+TEP2/Ij6Si2qcQuZ7QQfYs3XFeGBrTm4y4rSPHybAXq1hY2pJffWrRiWie/t1SOPY5xA/QWzMl+uSbXZPu8tgrrTL1xeK6OVlmmh52xy73IUxUoyIDe4OvFp6KnUFCNNiTbT6ojzNKcM46afV6hQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAj8n98kiphFxKXcU8LPf/8yMXFpgZI9cKBpTMv17k23KxB4VL01PBpV+iOhwS3VVc+0VMZ5oxFhEzEmdDIS1Ol1CQemYYE+Z0MiWKAjLrFCHo0ORo+54Y9ELYONNvpIZ5JURpWRWm7GhOcWIMH5kJk5R8bZnBrjdhu9ma+1DbVzI8lOP2oVqXcjOLzCs2MgpaFz0FkVG5GECDxkuQMSs/e9yQahq64+fKG3Kg9dWDl08Qz9TvLkE+VBWsjE6L8MnKSpuX/LtV0AifbNgkdq9xbq5Df6A/7yCEHQI1vZGzepeW/M1UwwL2DL1MPf3mvRxEQZPHPUtBEE3hD1E3xNP3WwIDAQABAoIBAFiqGam5HK69qi3AXabtFir7TFVmXLo487mzL74h6cVYJ8mXbHZXg2VSX1qtzQQmizt2M/L+pZ4R5QhIHKDsqzWrPCv9oINE7AmwFDXe6A52CnYlIodlqcWVIneICaPOOA2+7ac9Lr1AZH6OEyO43qreOQvsb/3ZsK6BNIwcA+Tz7HPCrOwSu+1yvnSmfPtdb/c461TWeczP+AazM33oMjIbL32gqgCuLS7CMsWTNZcRiHv3nAe8ujGhkShJPGhF3ZHO1xPc+MGNj7aXHyAQ/UTj3V2Z8iCVj7GHrPXYbfDcpIhrhesyDjWuvYvPEqK7YV3Xt6czRNhUQSLEeKwX5yECgYEAydpwU6iJARQKyo0ECRvLGYX0Uuki+xpuTc7m2MkNXEArZ7AZBc6CeSkmijQffYkiz4UcYxm62UcZnqjtrfVYMnlyr3ileTnwYCJDn03Gov1QMJRedYufC71N+kz8pN/vTDxLsOqGN57hle7TdJwjVxE+cocGd3yp6jnD9BIvX4UCgYEAtlwyNPu1o3ELkJ/+JFVM8IR08u5PPEKhdAew+RQRuWjC6V+5CZSlqlymIlANk0FWf31Y/mn2m+UNRGFzO8cUNQW11pWLLWbZHqdaiJxt4OCzLGAZeloh3UePWSCg/joZcnoQSKifPycoCcKBSt4DkXqrza/w1sfoa8ErSDRgAV8CgYEAyaTSg3AgdRhNc2yNtH+0U6nymgTV8hzERixDhhrKovZjpfBP/vH+ewT1wCgzsReW09H4urMQak/RsyK0VQx77+hM/ie6vjB4BcEU5oYuwdHmErGU7z3sQzD4Pew8koQ2LGUrg++05slsN3heeuYjk63hQU3L0v+RSjAspZypAHUCgYBCBBxU2+6EjY7/Ozw4kPy6cWkY7LaYfRKPu50QfnhwI4G0FGgbFMnoY4PtFgfkEBotKwaFi3ywMPpdj920fTxOeZO7bAWnWP0uwKzgmaiZaR7T6LIwfeKWhapaPJqrjgLaU2ADva9woE85QUWnAbpO9xas7o2EY3g7UgHGMNe0hwKBgFOCMRiRoVMhE4yuGq08DCTuc0rrXp244Ok/1EsP7Ho4AEaiSY2/zbMZeXXuwJgnqPL5DPV7zZMa3wUSoFcW2h0pSemE4UubNRTcXZAT1AGO5CrKqTCtvqAMt2NwWDEXBHiwzP797LHlziDF7xd773FyvP0Ue0X20dYXtdtSXrXD',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
        "notify"=>'https://requestbin.leo108.com/1fyqhcj1',
        "return"=>"http://localhost/payment/alipay/return"
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];