<?php
function view($file_path,$data=[]){
	$path = str_replace("\\",DIRECTORY_SEPARATOR,$file_path);

	$path = str_replace('.',DIRECTORY_SEPARATOR,$path);

	$file = APP_ROOT.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR.$path.'.php';
	
	if(file_exists($file)){
		extract($data);
		return require $file;
	}

	throw new Exception('Page not found'. $file);
}

function redirect($url){

	header("Location: $url");
	exit();
}


function pageAdd($file_path){
	include(APP_ROOT.'/pages/'.$file_path);
}

function dd(...$args) {
    foreach ($args as $arg) {
        echo '<pre>';
        var_dump($arg);
        echo '</pre>';
    }
    die;
}

function userIP() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    // Check if from shared internet
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    // Check if from a proxy
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    // Default, REMOTE_ADDR
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  
  return $ip;
}

/*
class EmailValidator
{
    private $email;
    private $domain;
    private $results = [];

    public function __construct($email)
    {
        $this->email = $email;

        // Validate the email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }

        // Extract domain from the email
        $this->domain = substr(strrchr($email, "@"), 1);
    }

    /**
     * Check MX records.
     */
/*
private function checkMX()
    {
        if (checkdnsrr($this->domain, "MX")) {
            $this->results['MX'] = [
                'status' => true,
                'message' => "MX records found for '{$this->domain}'.",
            ];
        } else {
            $this->results['MX'] = [
                'status' => false,
                'message' => "No MX records found for '{$this->domain}'.",
            ];
        }
    }

    /**
     * Check A records.
 */
/*
    private function checkA()
    {
        if (checkdnsrr($this->domain, "A")) {
            $this->results['A'] = [
                'status' => true,
                'message' => "A records found for '{$this->domain}'.",
            ];
        } else {
            $this->results['A'] = [
                'status' => false,
                'message' => "No A records found for '{$this->domain}'.",
            ];
        }
    }

    /**
     * Check SPF records.
 */
/*
    private function checkSPF()
    {
        $records = dns_get_record($this->domain, DNS_TXT);
        foreach ($records as $record) {
            if (isset($record['txt']) && stripos($record['txt'], 'v=spf1') === 0) {
                $this->results['SPF'] = [
                    'status' => true,
                    'message' => "SPF record found: {$record['txt']}",
                ];
                return;
            }
        }

        $this->results['SPF'] = [
            'status' => false,
            'message' => "No SPF record found for '{$this->domain}'.",
        ];
    }

    /**
     * Check DKIM records.
 */
/*
    private function checkDKIM($selector = 'default')
    {
        $dkimDomain = "{$selector}._domainkey.{$this->domain}";
        $records = dns_get_record($dkimDomain, DNS_TXT);
        foreach ($records as $record) {
            if (isset($record['txt']) && stripos($record['txt'], 'v=DKIM1') === 0) {
                $this->results['DKIM'] = [
                    'status' => true,
                    'message' => "DKIM record found for selector '$selector': {$record['txt']}",
                ];
                return;
            }
        }

        $this->results['DKIM'] = [
            'status' => false,
            'message' => "No DKIM record found for selector '$selector'.",
        ];
    }

    /**
     * Check DMARC records.
 */
/*
    private function checkDMARC()
    {
        $dmarcDomain = "_dmarc.{$this->domain}";
        $records = dns_get_record($dmarcDomain, DNS_TXT);
        foreach ($records as $record) {
            if (isset($record['txt']) && stripos($record['txt'], 'v=DMARC1') === 0) {
                $this->results['DMARC'] = [
                    'status' => true,
                    'message' => "DMARC record found: {$record['txt']}",
                ];
                return;
            }
        }

        $this->results['DMARC'] = [
            'status' => false,
            'message' => "No DMARC record found for '{$this->domain}'.",
        ];
    }

    /**
     * Check BIMI records.
 */
/*
    private function checkBIMI()
    {
        $bimiDomain = "_bimi.{$this->domain}";
        $records = dns_get_record($bimiDomain, DNS_TXT);
        foreach ($records as $record) {
            if (isset($record['txt'])) {
                $this->results['BIMI'] = [
                    'status' => true,
                    'message' => "BIMI record found: {$record['txt']}",
                ];
                return;
            }
        }

        $this->results['BIMI'] = [
            'status' => false,
            'message' => "No BIMI record found for '{$this->domain}'.",
        ];
    }

    /**
     * Run all validations.
 */
/*
    public function validate($dkimSelector = 'default')
    {
        $this->checkMX();
        $this->checkA();
        $this->checkSPF();
        $this->checkDKIM($dkimSelector);
        $this->checkDMARC();
        $this->checkBIMI();
        return $this->results;
    }

    /**
     * Format validation results as JSON.
 */
/*
    public function getResultsAsJson()
    {
        return json_encode($this->results, JSON_PRETTY_PRINT);
    }

    /**
     * Format validation results as a readable string.
 */
/*
    public function getResultsAsString()
    {
        $output = "Validation Results for '{$this->email}':\n";
        foreach ($this->results as $key => $result) {
            $status = $result['status'] ? 'PASS' : 'FAIL';
            $output .= "[{$key}] {$status}: {$result['message']}\n";
        }
        return $output;
    }
}

// Usage
try {
    $email = "example@example.com";
    $validator = new EmailValidator($email);
    $results = $validator->validate();

    // Display results as a string
    echo $validator->getResultsAsString();

    // Display results as JSON
    // echo $validator->getResultsAsJson();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
*/

