# block-io-exercice
Make a testnet payment in php with block.io
<br />

<h1>Get a block.io account</h1>
Go on https://www.block.io and create an account (you can skip the Plan choice)<br>
Choose <strong>Testnest</strong> -> <strong>Bitcoin (Testnet)</strong><br />
Click on <strong>Show API Keys</strong> and get the <strong>Bitcoin</strong> key<br />


<h1>Install</h1>
<h2>Get the project</h2>
Clone the project<br />
<code>cd block-io-exercice</code>

<h2>Configure</h2>
Edit <pre>index.php</pre> and add
your <strong>Bitcoin api key</strong> <code>$apiKey = 'xxxx-xxxx-xxxx-xxxx';</code><br />
and your <strong>pin password</strong> <code>$pin = 'xxxxxx';</code><br />

<h2>Test</h2>
Execute
<pre>php index.php</pre>

You might need to install some packages
<pre>apt-get update && apt-get -y install php5-curl php5-mcrypt</pre>

Then you should see the balance of the <i>2N6rmc2rcsFnPQHPskzVRGQ9XyHbEmyPudX</i> address<br />

<h1>Exercice</h1>
<h2>Purpose</h2>
Make payments with the block.io PHP API
<h2>Details</h2>
Use the <code>withdraw_from_addresses()</code> function to make payments. Details are on the block.io PHP API documentation: <a href="https://www.block.io/api/simple/php" target="_blank">https://www.block.io/api/simple/php</a><br />
Note: You are identified in block.io with your API key, so you don't need to use any private key on the <code>'from_addresses' => 'ADDRESS1,ADDRESS2,...'</code>, just your block.io public key.<br />
<br />
You can make a test payment on 2N6rmc2rcsFnPQHPskzVRGQ9XyHbEmyPudX

<h2>Improvement</h2>
You can use <code>get_my_addresses()</code> to automaticaly select the address with enough bitcoin
Example:
<code>
$totalAmount = 0.001;
$blockAddresses = $block_io->get_my_addresses();
foreach($blockAddresses->data->addresses as $address) {
    if ($address->available_balance > $totalAmount) {
        $paymentAddress = $address->address;
        break;
    }
}
</code>
