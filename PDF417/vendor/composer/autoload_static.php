<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8279833758489f0f90c4a5e27b87ec29
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '75d4b1647cdbc77a59f72bcb74df0995' => __DIR__ . '/..' . '/spipu/html2pdf/html2pdf.class.php',
        '766ddebdb359eb94f1ba3ece4f768b10' => __DIR__ . '/..' . '/spipu/html2pdf/_class/exception.class.php',
        '585b118af784f8bbcc53fec65bb600cd' => __DIR__ . '/..' . '/spipu/html2pdf/_class/locale.class.php',
        '4148c0c72e9cb9146c3692e138ddcedc' => __DIR__ . '/..' . '/spipu/html2pdf/_class/myPdf.class.php',
        '24a5693ab78636f7a23448ee74523987' => __DIR__ . '/..' . '/spipu/html2pdf/_class/parsingHtml.class.php',
        '30eee86291d721c2174ad40239331e78' => __DIR__ . '/..' . '/spipu/html2pdf/_class/parsingCss.class.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'archon810\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\' => 16,
        ),
        'B' => 
        array (
            'BigFish\\PDF417\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'archon810\\' => 
        array (
            0 => __DIR__ . '/..' . '/archon810/smartdomdocument/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
        ),
        'BigFish\\PDF417\\' => 
        array (
            0 => __DIR__ . '/..' . '/bigfish/pdf417/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'Jacwright\\RestServer' => 
            array (
                0 => __DIR__ . '/..' . '/jacwright/restserver/source',
            ),
        ),
        'F' => 
        array (
            'ForceUTF8\\' => 
            array (
                0 => __DIR__ . '/..' . '/neitanod/forceutf8/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Datamatrix' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
        'PDF417' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
        'QRcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
        'TCPDF' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf.php',
        'TCPDF2DBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
        'TCPDFBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
        'TCPDF_COLORS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
        'TCPDF_FILTERS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
        'TCPDF_FONTS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
        'TCPDF_FONT_DATA' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
        'TCPDF_IMAGES' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_images.php',
        'TCPDF_IMPORT' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_import.php',
        'TCPDF_PARSER' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_parser.php',
        'TCPDF_STATIC' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8279833758489f0f90c4a5e27b87ec29::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8279833758489f0f90c4a5e27b87ec29::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8279833758489f0f90c4a5e27b87ec29::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8279833758489f0f90c4a5e27b87ec29::$classMap;

        }, null, ClassLoader::class);
    }
}
