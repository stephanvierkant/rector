<?php

namespace RectorPrefix20210603\Composer;

use RectorPrefix20210603\Composer\Autoload\ClassLoader;
use RectorPrefix20210603\Composer\Semver\VersionParser;
class InstalledVersions
{
    private static $installed = array('root' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '0.11.x-dev'), 'reference' => NULL, 'name' => 'rector/rector-src'), 'versions' => array('composer/semver' => array('pretty_version' => '3.2.5', 'version' => '3.2.5.0', 'aliases' => array(), 'reference' => '31f3ea725711245195f62e54ffa402d8ef2fdba9'), 'composer/xdebug-handler' => array('pretty_version' => '2.0.1', 'version' => '2.0.1.0', 'aliases' => array(), 'reference' => '964adcdd3a28bf9ed5d9ac6450064e0d71ed7496'), 'danielstjules/stringy' => array('pretty_version' => '3.1.0', 'version' => '3.1.0.0', 'aliases' => array(), 'reference' => 'df24ab62d2d8213bbbe88cc36fc35a4503b4bd7e'), 'doctrine/inflector' => array('pretty_version' => '2.0.3', 'version' => '2.0.3.0', 'aliases' => array(), 'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210'), 'ergebnis/json-printer' => array('pretty_version' => '3.1.1', 'version' => '3.1.1.0', 'aliases' => array(), 'reference' => 'e4190dadd9937a77d8afcaf2b6c42a528ab367d6'), 'helmich/typo3-typoscript-parser' => array('pretty_version' => 'v2.3.1', 'version' => '2.3.1.0', 'aliases' => array(), 'reference' => '366c38db68a83503ba4148cd77d77e08deae084e'), 'idiosyncratic/editorconfig' => array('pretty_version' => '0.1.3', 'version' => '0.1.3.0', 'aliases' => array(), 'reference' => '3445fa4a1e00f95630d4edc729c2effb116db19b'), 'nette/caching' => array('pretty_version' => 'v3.1.1', 'version' => '3.1.1.0', 'aliases' => array(), 'reference' => '3e771c589dee414724be473c24ad16dae50c1960'), 'nette/finder' => array('pretty_version' => 'v2.5.2', 'version' => '2.5.2.0', 'aliases' => array(), 'reference' => '4ad2c298eb8c687dd0e74ae84206a4186eeaed50'), 'nette/neon' => array('pretty_version' => 'v3.2.2', 'version' => '3.2.2.0', 'aliases' => array(), 'reference' => 'e4ca6f4669121ca6876b1d048c612480e39a28d5'), 'nette/utils' => array('pretty_version' => 'v3.2.2', 'version' => '3.2.2.0', 'aliases' => array(), 'reference' => '967cfc4f9a1acd5f1058d76715a424c53343c20c'), 'nikic/php-parser' => array('pretty_version' => 'v4.10.5', 'version' => '4.10.5.0', 'aliases' => array(), 'reference' => '4432ba399e47c66624bc73c8c0f811e5c109576f'), 'phpstan/phpdoc-parser' => array('pretty_version' => '0.5.4', 'version' => '0.5.4.0', 'aliases' => array(), 'reference' => 'e352d065af1ae9b41c12d1dfd309e90f7b1f55c9'), 'phpstan/phpstan' => array('pretty_version' => '0.12.86', 'version' => '0.12.86.0', 'aliases' => array(), 'reference' => 'a84fdc53ecca7643dbc89ef8880d8b393a6c155a'), 'phpstan/phpstan-phpunit' => array('pretty_version' => '0.12.19', 'version' => '0.12.19.0', 'aliases' => array(), 'reference' => '52f7072ddc5f81492f9d2de65a24813a48c90b18'), 'psr/container' => array('pretty_version' => '1.1.1', 'version' => '1.1.1.0', 'aliases' => array(), 'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf'), 'psr/container-implementation' => array('provided' => array(0 => '1.0')), 'psr/event-dispatcher' => array('pretty_version' => '1.0.0', 'version' => '1.0.0.0', 'aliases' => array(), 'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0'), 'psr/event-dispatcher-implementation' => array('provided' => array(0 => '1.0')), 'psr/log' => array('pretty_version' => '1.1.4', 'version' => '1.1.4.0', 'aliases' => array(), 'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11'), 'psr/log-implementation' => array('provided' => array(0 => '1.0')), 'rector/extension-installer' => array('pretty_version' => '0.10.2', 'version' => '0.10.2.0', 'aliases' => array(), 'reference' => '56c97630fca170b5586b2f08e76348f924ebb8dd'), 'rector/rector' => array('replaced' => array(0 => '0.11.x-dev', 1 => 'dev-main')), 'rector/rector-cakephp' => array('pretty_version' => '0.11.2', 'version' => '0.11.2.0', 'aliases' => array(), 'reference' => '6ccf728d9e57c8a7069c9972f48588158ce3b7d0'), 'rector/rector-doctrine' => array('pretty_version' => '0.11.2', 'version' => '0.11.2.0', 'aliases' => array(), 'reference' => 'c448264acc0e6caa2ae9ecb57454f600af4f4c6a'), 'rector/rector-laravel' => array('pretty_version' => '0.11.1', 'version' => '0.11.1.0', 'aliases' => array(), 'reference' => '8ea109ba13c802edf8c5500f60486376bddb25f2'), 'rector/rector-nette' => array('pretty_version' => '0.11.4', 'version' => '0.11.4.0', 'aliases' => array(), 'reference' => '4d24489df2389a698caf6148a008dc0cb08c0255'), 'rector/rector-nette-to-symfony' => array('pretty_version' => '0.11.3', 'version' => '0.11.3.0', 'aliases' => array(), 'reference' => '607b5dcd213c8c0305ea190499363e2be83bf5fb'), 'rector/rector-phpunit' => array('pretty_version' => '0.11.1', 'version' => '0.11.1.0', 'aliases' => array(), 'reference' => '99a956f78cee2e5dece9378e3d6b147d78e1fc8e'), 'rector/rector-src' => array('pretty_version' => 'dev-main', 'version' => 'dev-main', 'aliases' => array(0 => '0.11.x-dev'), 'reference' => NULL), 'rector/rector-symfony' => array('pretty_version' => '0.11.4', 'version' => '0.11.4.0', 'aliases' => array(), 'reference' => '897139e6e1321ea2de50e9473e63cd1958c799b3'), 'sebastian/diff' => array('pretty_version' => '4.0.4', 'version' => '4.0.4.0', 'aliases' => array(), 'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d'), 'ssch/typo3-rector' => array('pretty_version' => 'v0.11.13', 'version' => '0.11.13.0', 'aliases' => array(), 'reference' => 'fa550d7f2388bcdd0d47c6cd38affe25e078b735'), 'symfony/config' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '9f4a448c2d7fd2c90882dfff930b627ddbe16810'), 'symfony/console' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '058553870f7809087fa80fa734704a21b9bcaeb2'), 'symfony/dependency-injection' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '94d973cb742d8c5c5dcf9534220e6b73b09af1d4'), 'symfony/deprecation-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627'), 'symfony/error-handler' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '0e6768b8c0dcef26df087df2bbbaa143867a59b2'), 'symfony/event-dispatcher' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '67a5f354afa8e2f231081b3fa11a5912f933c3ce'), 'symfony/event-dispatcher-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11'), 'symfony/event-dispatcher-implementation' => array('provided' => array(0 => '2.0')), 'symfony/filesystem' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '348116319d7fb7d1faa781d26a48922428013eb2'), 'symfony/finder' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6'), 'symfony/http-client-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4'), 'symfony/http-foundation' => array('pretty_version' => 'v5.3.1', 'version' => '5.3.1.0', 'aliases' => array(), 'reference' => '8827b90cf8806e467124ad476acd15216c2fceb6'), 'symfony/http-kernel' => array('pretty_version' => 'v5.3.1', 'version' => '5.3.1.0', 'aliases' => array(), 'reference' => '74eb022e3bac36b3d3a897951a98759f2b32b864'), 'symfony/polyfill-ctype' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce'), 'symfony/polyfill-intl-grapheme' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => '24b72c6baa32c746a4d0840147c9715e42bb68ab'), 'symfony/polyfill-intl-normalizer' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8'), 'symfony/polyfill-mbstring' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => '2df51500adbaebdc4c38dea4c89a2e131c45c8a1'), 'symfony/polyfill-php73' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010'), 'symfony/polyfill-php80' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => 'eca0bf41ed421bed1b57c4958bab16aa86b757d0'), 'symfony/polyfill-php81' => array('pretty_version' => 'v1.23.0', 'version' => '1.23.0.0', 'aliases' => array(), 'reference' => 'e66119f3de95efc359483f810c4c3e6436279436'), 'symfony/process' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '53e36cb1c160505cdaf1ef201501669c4c317191'), 'symfony/service-contracts' => array('pretty_version' => 'v2.4.0', 'version' => '2.4.0.0', 'aliases' => array(), 'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb'), 'symfony/service-implementation' => array('provided' => array(0 => '1.0|2.0')), 'symfony/string' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => 'a9a0f8b6aafc5d2d1c116dcccd1573a95153515b'), 'symfony/var-dumper' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '1d3953e627fe4b5f6df503f356b6545ada6351f3'), 'symfony/var-exporter' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '7a7c9dd972541f78e7815c03c0bae9f81e0e9dbb'), 'symfony/yaml' => array('pretty_version' => 'v5.3.0', 'version' => '5.3.0.0', 'aliases' => array(), 'reference' => '3bbcf262fceb3d8f48175302e6ba0ac96e3a5a11'), 'symplify/astral' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => '4878800febd7dde769a1f7790c4be8711dc223c5'), 'symplify/autowire-array-parameter' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => '9ab5c1c3b688d5c55196fa1c1ddf6c4726c71147'), 'symplify/composer-json-manipulator' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => 'c7bef000f2821d2f03f097db2387b01a40b4b48b'), 'symplify/console-color-diff' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => '98f25cecbacffeebf7a857ee934e1030600b13e8'), 'symplify/console-package-builder' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => 'aa564a794477abcba0df7b97fcce836f484325c4'), 'symplify/easy-testing' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => 'a5112cd8d057f15cd749f915569908e665c29ace'), 'symplify/package-builder' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => 'bdb987fbfe01eb581be791980958ecc6c5e6c048'), 'symplify/rule-doc-generator-contracts' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => '75bda667533565fe72ddee131234851f1893e091'), 'symplify/simple-php-doc-parser' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => '2aa4cdfa68c7f0160c882bc8b035ad964cb33ef3'), 'symplify/skipper' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => '5cfc41686d4dda708c2fa2f558ca84c3e3e60c1e'), 'symplify/smart-file-system' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => 'a2a8d39fe46b01ead8d2af7368b0b36b68fac979'), 'symplify/symfony-php-config' => array('pretty_version' => 'v9.3.10', 'version' => '9.3.10.0', 'aliases' => array(), 'reference' => '91f29a210de56fb208da5e18c8573937bf7bc37e'), 'symplify/symplify-kernel' => array('pretty_version' => 'v9.3.15', 'version' => '9.3.15.0', 'aliases' => array(), 'reference' => 'd8641f97ee362c42115bee60bc20a07628c4c50f'), 'tracy/tracy' => array('pretty_version' => 'v2.8.5', 'version' => '2.8.5.0', 'aliases' => array(), 'reference' => 'b23da41363546aa750d9f698f21e14815bd78913'), 'webmozart/assert' => array('pretty_version' => '1.10.0', 'version' => '1.10.0.0', 'aliases' => array(), 'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25')));
    private static $canGetVendors;
    private static $installedByVendor = array();
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = \array_keys($installed['versions']);
        }
        if (1 === \count($packages)) {
            return $packages[0];
        }
        return \array_keys(\array_flip(\call_user_func_array('array_merge', $packages)));
    }
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return \true;
            }
        }
        return \false;
    }
    public static function satisfies(\RectorPrefix20210603\Composer\Semver\VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));
        return $provided->matches($constraint);
    }
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (\array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = \array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (\array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = \array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (\array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = \array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }
            return \implode(' || ', $ranges);
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }
            return $installed['versions'][$packageName]['version'];
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }
            return $installed['versions'][$packageName]['pretty_version'];
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }
            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }
            return $installed['versions'][$packageName]['reference'];
        }
        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }
    public static function getRootPackage()
    {
        $installed = self::getInstalled();
        return $installed[0]['root'];
    }
    public static function getRawData()
    {
        @\trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', \E_USER_DEPRECATED);
        return self::$installed;
    }
    public static function getAllRawData()
    {
        return self::getInstalled();
    }
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = \method_exists('RectorPrefix20210603\\Composer\\Autoload\\ClassLoader', 'getRegisteredLoaders');
        }
        $installed = array();
        if (self::$canGetVendors) {
            foreach (\RectorPrefix20210603\Composer\Autoload\ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (\is_file($vendorDir . '/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = (require $vendorDir . '/composer/installed.php');
                }
            }
        }
        $installed[] = self::$installed;
        return $installed;
    }
}
