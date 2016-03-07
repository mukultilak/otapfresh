<?php
				$url='http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey=t4wfks1QAkipiV3VAEn2cQ&senderid=WEBSMS&channel=2&DCS=0&flashsms=0&number=919545078343&text=Hello this is test msg for Ajaz&route=clickhere';
				$url = preg_replace("/ /", "%20", $url);
				$json = file_get_contents($url);
				$data = json_decode($json);
				var_dump($data);
