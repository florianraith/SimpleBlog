<?php


namespace App\Core\Response;

/**
 * Class Response
 * @package App\Core\Response
 */
class Response
{
    const JSON_CONTENT_TYPE = 'Content-Type: application/json';
    const HTML_CONTENT_TYPE = 'Content-type: text/html; charset=UTF-8';
    const PLAIN_CONTENT_TYPE = 'Content-type: text/plain; charset=UTF-8';

    /**
     * @var int
     */
   private $status_code;

    /**
     * @var string
     */
   private $content_type;

    /**
     * @var string
     */
   private $content;

    /**
     * Response constructor.
     * @param int $status_code
     * @param string $content_type
     * @param string $content
     */
    public function __construct(int $status_code, string $content_type, string $content)
    {
        $this->status_code = $status_code;
        $this->content_type = $content_type;
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->status_code;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->content_type;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}