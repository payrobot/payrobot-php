<?php
/**
 * WalletSendRequestTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Payrobot
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * payrobot.io API
 *
 * # Introduction Accept, store, send or forward Bitcoin, Litecoin and Bitcoin Cash for your website or app and protect your privacy.  Supported crytocurrencies:   * BTC Bitcoin   * LTC Litecoin   * BCH Bitcoin Cash   ## Benefits    * **Anonymous** No personal details are required and transactions are mixed among all payments. You can forward your payments so as soon payrobot.io receives it forwards it to another address under your control.      * **No Registration** No registration, sign-up, application or form required to use payrobot.io      * **Easy Integration** Integrate your web / app through our simple RESTful API, you can accept payments with just one line of code!      * **Instant Payment Notification** Our servers notify your web / app the status of your payments. No polling, daemons or cronjobs required on your side!      * **Secure** Payrobot.io works with SSL and bank-level security protocols. Your transactions are safe!   ## Features **Payment Forward** Generate one-time addresses to recieve payments. Payrobot will notify your web /app through callbacks (webhooks) the status of the payment. As soon as it's confirmed the payment is forwarded to your desired address.  **Wallet** Receive, send payments and store your coins in a secure, private and anonymous wallet. All events are notified to your web / app through callbacks (webhooks). You can generate wallets with just one line of code without registration or further information  ## Fees **Only 0.90% per inbound transaction** (receive payments), NO HIDDEN FEES. All outbound transactions (send funds) are totally free.  Minimum fees applies, therefore the largest amount is going to be considered as fee either: `(inboundAmount*feePct)` or `the minimum fee`  **Inbound Fees (Receive payments)**    - `Bitcoin` 0.90% *(Minimum fee 0.00005 BTC)*   - `Litecoin` 0.90% *(Minimum fee 0.0005 LTC)*   - `Bitcoin Cash` 0.90% *(Minimum fee 0.0005 BCH)*     **Outbound Fees (Send funds)**    - `Bitcoin` 0.00%   - `Litecoin` 0.00%   - `Bitcoin Cash` 0.00%   ## Rate Limit To guarantee the good performance of the service and its fair use. The API is **limited to receiving 120 requests per minute per IP**, which is sufficient for most use cases.  Payrobot.io is asynchronous in most API methods to communicate with your application through callbacks (webhooks), thus reducing unnecessary calls to the service.  **If the limit is exceeded, the IP will be banned for 1 minute.**  If you require an upper limit for your application, do not hesitate to contact us  ## Considerations    * Amounts in responses are expresed as `strings`      * Wallets are not multi-currency, you have to create a different wallet per cryptocurrency (You can't store Litecoin in a Bitcoin wallet and vice-versa)      * Payment forwarding has to be of the same type of currency (You can't forward a Bitcoin Cash payment to a Bitcoin address and vice-versa)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: contact@payrobot.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Payrobot;

use PHPUnit\Framework\TestCase;

/**
 * WalletSendRequestTest Class Doc Comment
 *
 * @category    Class
 * @description WalletSendRequest
 * @package     Payrobot
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class WalletSendRequestTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "WalletSendRequest"
     */
    public function testWalletSendRequest()
    {
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
    }

    /**
     * Test attribute "walletId"
     */
    public function testPropertyWalletId()
    {
    }

    /**
     * Test attribute "requestId"
     */
    public function testPropertyRequestId()
    {
    }

    /**
     * Test attribute "timestamp"
     */
    public function testPropertyTimestamp()
    {
    }

    /**
     * Test attribute "lastupdate"
     */
    public function testPropertyLastupdate()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "callback"
     */
    public function testPropertyCallback()
    {
    }

    /**
     * Test attribute "destination"
     */
    public function testPropertyDestination()
    {
    }

    /**
     * Test attribute "txid"
     */
    public function testPropertyTxid()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "error"
     */
    public function testPropertyError()
    {
    }
}
