<?php
/**
 * PHPHttpCompatibility_Sniffs_Http_DeprecatedFunctionsSniff.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Discourage the use of 1.x API functions.
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
class PHPHttpCompatibility_Sniffs_Http_DeprecatedFunctionsSniff extends Generic_Sniffs_PHP_ForbiddenFunctionsSniff
{

    /**
     * A list of deprecated functions with their alternatives.
     *
     * The value is NULL if no alternative exists, i.e., the function should
     * just not be used.
     *
     * @var array(string => string|null)
     */
    protected $forbiddenFunctions = array(
                                     'http_cache_last_modified'       => null,
                                     'http_chunked_decode'            => null,
                                     'http_deflate'                   => null,
                                     'http_inflate'                   => null,
                                     'http_build_cookie'              => null,
                                     'http_date'                      => null,
                                     'http_get_request_body_stream'   => null,
                                     'http_get_request_body'          => null,
                                     'http_get_request_headers'       => null,
                                     'http_match_etag'                => null,
                                     'http_match_modified'            => null,
                                     'http_match_request_header'      => null,
                                     'http_support'                   => null,
                                     'http_negotiate_charset'         => null,
                                     'http_negotiate_content_type'    => null,
                                     'http_negotiate_language'        => null,
                                     'ob_deflatehandler'              => null,
                                     'ob_etaghandler'                 => null,
                                     'ob_inflatehandler'              => null,
                                     'http_parse_cookie'              => null,
                                     'http_parse_headers'             => null,
                                     'http_parse_message'             => null,
                                     'http_parse_params'              => null,
                                     'http_persistent_handles_clean'  => null,
                                     'http_persistent_handles_count'  => null,
                                     'http_persistent_handles_ident'  => null,
                                     'http_get'                       => null,
                                     'http_head'                      => null,
                                     'http_post_data'                 => null,
                                     'http_post_fields'               => null,
                                     'http_put_data'                  => null,
                                     'http_put_file'                  => null,
                                     'http_put_stream'                => null,
                                     'http_request_body_encode'       => null,
                                     'http_request_method_exists'     => null,
                                     'http_request_method_name'       => null,
                                     'http_request_method_register'   => null,
                                     'http_request_method_unregister' => null,
                                     'http_request'                   => null,
                                     'http_redirect'                  => null,
                                     'http_send_content_disposition'  => null,
                                     'http_send_content_type'         => null,
                                     'http_send_data'                 => null,
                                     'http_send_file'                 => null,
                                     'http_send_last_modified'        => null,
                                     'http_send_status'               => null,
                                     'http_send_stream'               => null,
                                     'http_throttle'                  => null,
                                     'http_build_str'                 => null,
                                     'http_build_url'                 => null,
                                    );

    /**
     * If true, an error will be thrown; otherwise a warning.
     *
     * @var bool
     */
    public $error = false;

}//end class

?>
