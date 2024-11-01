<?php declare(strict_types=1);

namespace Scraper\ScraperUPS\Enum;

enum UserCreatedFormFileFormatEnum: string
{
    case BMP = 'bmp';
    case DOC = 'doc';
    case DOCX = 'docx';
    case GIF = 'gif';
    case JPG = 'jpg';
    case PDF = 'pdf';
    case PNG = 'png';
    case RTF = 'rtf';
    case TIF = 'tif';
    case TXT = 'txt';
    case XLS = 'xls';
    case XLSX = 'xlsx';
}
