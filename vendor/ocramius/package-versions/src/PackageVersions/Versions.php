<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'egulias/email-validator' => '2.1.18@cfa3d44471c7f5bfb684ac2b0da7114283d78441',
  'gedmo/doctrine-extensions' => 'v2.4.41@e55a6727052f91834a968937c93b6fb193be8fb6',
  'knplabs/knp-components' => 'v2.3.6@cf7ae015c1783009e2fd269483cd2b38a57b7033',
  'knplabs/knp-paginator-bundle' => 'v5.2.0@787174799b8de92287865566dce9e0625015f8ff',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'monolog/monolog' => '1.25.4@3022efff205e2448b560c833c6fbbf91c3139168',
  'ocramius/package-versions' => '1.9.0@94c9d42a466c57f91390cdd49c81313264f49d85',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.6@b49f079d8a87a6e6dd434062085ff5a132af466b',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'stof/doctrine-extensions-bundle' => 'v1.4.0@4d340daa1a8304faa62260be2adb0180e2138af3',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.10@d8a755baa015b8949a105b8288eeb0714d9b1b5f',
  'symfony/cache' => 'v4.4.10@e12aad53e6b9fa80a3ca1d043b6dde9449b4f924',
  'symfony/cache-contracts' => 'v2.1.2@87c92f62c494626598e9148208aaa6d1716b8e3c',
  'symfony/config' => 'v4.4.10@395f6e09e1dc6ac9c1a5eea3b7f44f7a820a5504',
  'symfony/console' => 'v4.4.10@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/debug' => 'v4.4.10@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/dependency-injection' => 'v4.4.10@a37cc0a90fec178768aa5048fea9251efde591c5',
  'symfony/doctrine-bridge' => 'v4.4.10@01463555497ed8844a3b1511c5ff39dd226ccd0a',
  'symfony/dotenv' => 'v4.4.10@24d734ab97c7fb8b4fa10c64ee0c344f2badfcf0',
  'symfony/error-handler' => 'v4.4.10@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.10@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.10@89f0e2c82d8c12975180f993383decbb810ad73e',
  'symfony/filesystem' => 'v4.4.10@b27f491309db5757816db672b256ea2e03677d30',
  'symfony/finder' => 'v4.4.10@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.8.4@7df5a72c7664baab629ec33de7890e9e3996b51b',
  'symfony/form' => 'v4.4.10@d3d8ebb8525418161b862738c4cefe518e431ff3',
  'symfony/framework-bundle' => 'v4.4.10@7da157f220ed61f43506ce5dc0527437da08095e',
  'symfony/http-client' => 'v4.4.10@b141d8dd0c2dca86287e33c3dcab079a778ed479',
  'symfony/http-client-contracts' => 'v2.1.2@f8bed25edc964d015bcd87f1fec5734963931910',
  'symfony/http-foundation' => 'v4.4.10@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.10@81d42148474e1852a333ed7a732f2a014af75430',
  'symfony/inflector' => 'v4.4.10@3330be44724db42f0aa493002ae63f5d29f8d5f7',
  'symfony/intl' => 'v4.4.10@42a07a917c4db30c671b545175e402053ff23ad0',
  'symfony/mailer' => 'v4.4.10@fd16ff23c18146be32b1ea51f6cc43dc505ce361',
  'symfony/mime' => 'v4.4.10@af8e69e7527f752ab0ef6e1b717bac3f7336b8c6',
  'symfony/monolog-bridge' => 'v4.4.10@beb70975af56acdd67f3add01970165954d577c5',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.10@73e1d0fe11ffceb7b7d4ca55b7381cd7ce0bac05',
  'symfony/polyfill-intl-icu' => 'v1.17.1@7b5e03aeb88cc8b4b2b136e34b0fc0830e86cd4d',
  'symfony/polyfill-intl-idn' => 'v1.17.1@a57f8161502549a742a63c09f0a604997bf47027',
  'symfony/polyfill-mbstring' => 'v1.17.1@7110338d81ce1cbc3e273136e4574663627037a7',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.1@fa0837fe02d617d31fbb25f990655861bb27bd1a',
  'symfony/polyfill-php80' => 'v1.17.1@4a5b6bba3259902e386eb80dd1956181ee90b5b2',
  'symfony/process' => 'v4.4.10@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/property-access' => 'v4.4.10@e6d51a8845b862835f5fcaf3c1030a50dc7cc70f',
  'symfony/property-info' => 'v4.4.10@9904ddd5a24777b744123148bfaedbd83ce66d24',
  'symfony/routing' => 'v4.4.10@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/security-bundle' => 'v4.4.10@6c1e30e2755928313e5eb55af20f615ed9fec2a2',
  'symfony/security-core' => 'v4.4.10@16ab88e5692e3fc32ae4ad550a55fbced516203b',
  'symfony/security-csrf' => 'v4.4.10@8788f6d4c8555b34d6f32f42b996b937b473f6b3',
  'symfony/security-guard' => 'v4.4.10@699162c3a9fcceb5ec8bce35a3dc2fcb79c6751e',
  'symfony/security-http' => 'v4.4.10@4aab90c5797a4f2ee9d5cd91f5e884d1e21f431a',
  'symfony/serializer' => 'v4.4.10@a91ceee34fc690a824770085192ffdeaa4476a8c',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v4.4.10@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.4.10@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/twig-bridge' => 'v4.4.10@13a9659ebceea38814ef8fde6399e36760ea08ad',
  'symfony/twig-bundle' => 'v4.4.10@c83e606bdc54504a1b2bcd8807b5dd139187b4a4',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.10@2fae3378102cff29976ce9e35f6964c78fce02b6',
  'symfony/var-dumper' => 'v4.4.10@56b3aa5eab0ac6720dcd559fd1d590ce301594ac',
  'symfony/var-exporter' => 'v4.4.10@f311af6e44fefedbd4f1e23e97607ef0f917bfcc',
  'symfony/web-link' => 'v4.4.10@b862a104ef3a233b6f12fdbf6b57113308af79ff',
  'symfony/yaml' => 'v4.4.10@c2d2cc66e892322cfcc03f8f12f8340dbd7a3f8a',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/intl-extra' => 'v3.0.3@55d68a5836f40d62695488b4bdbc71fa71f52574',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webimpress/safe-writer' => '2.0.1@d6e879960febb307c112538997316371f1e95b12',
  'webmozart/assert' => '1.9.0@9dc4f203e36f2b486149058bade43c851dd97451',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/xdebug-handler' => '1.4.2@fa2aaf99e2087f013a14f7432c1cd2dd7d8f1f51',
  'doctrine/data-fixtures' => '1.4.3@7ebac50901eb4516816ac39100dba1759d843943',
  'doctrine/doctrine-fixtures-bundle' => '3.3.1@39defca57ee0949e1475c46177b30b6d1b732e8f',
  'escapestudios/symfony2-coding-standard' => '3.11.0@78e3b0b6832c88cf7c0240b4abcd61430030d8c3',
  'friendsofphp/php-cs-fixer' => 'v2.16.4@1023c3458137ab052f6ff1e09621a721bfdeca13',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'pdepend/pdepend' => '2.8.0@c64472f8e76ca858c79ad9a4cf1e2734b3f8cc38',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpmd/phpmd' => '2.8.2@714629ed782537f638fe23c4346637659b779a77',
  'squizlabs/php_codesniffer' => '3.5.5@73e2e7f57d958e7228fce50dc0c61f58f017f9f6',
  'symfony/browser-kit' => 'v4.4.10@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/css-selector' => 'v4.4.10@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/debug-bundle' => 'v4.4.10@12a020d14b4f6f3a5cfb46cd83836b78be036210',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.4.10@c18354d5a0bb84c945f6257c51b971d52f10c614',
  'symfony/maker-bundle' => 'v1.19.0@bea8c3c959e48a2c952cc7c4f4f32964be8b8874',
  'symfony/phpunit-bridge' => 'v5.1.2@de5f0fec631a0cbfe98630b053be1fad7b75aece',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.10@e86d3e8d9230fddfee27017f3b8c5c868733079e',
  'paragonie/random_compat' => '2.*@0695017c5f3040fd5038cd77d071854b40da619c',
  'symfony/polyfill-ctype' => '*@0695017c5f3040fd5038cd77d071854b40da619c',
  'symfony/polyfill-iconv' => '*@0695017c5f3040fd5038cd77d071854b40da619c',
  'symfony/polyfill-php71' => '*@0695017c5f3040fd5038cd77d071854b40da619c',
  'symfony/polyfill-php70' => '*@0695017c5f3040fd5038cd77d071854b40da619c',
  'symfony/polyfill-php56' => '*@0695017c5f3040fd5038cd77d071854b40da619c',
  '__root__' => 'dev-master@0695017c5f3040fd5038cd77d071854b40da619c',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
