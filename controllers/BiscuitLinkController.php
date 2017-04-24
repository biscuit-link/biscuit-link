<?php

class BiscuitLinkController extends Controller
{

    const DEFAULT_TITLE = 'Biscuit Link - The PHP Framework for Everyone';

    /**
     * Main Pages
     */
    public static function displayIndex()
    {
        $tpl = Template::create('biscuit/pages/index.tpl');
        $tpl->assign('page_title', self::DEFAULT_TITLE);
        $tpl->display();
    }

    /**
     * Documentation Pages
     */
    private static $valid_docs = array(
        'index' => 'Getting Started',
        'folder-structure' => 'Folder Structure',
        'templates' => 'Templates'
    );

    public static function displayDoc($doc_file = null)
    {
        $doc_file = trim($doc_file);
        if (empty($doc_file))
        {
            $doc_file = 'index';
        }
        $page_title = self::get_doc_title($doc_file);

        $tpl = Template::create('biscuit/pages/docpage.tpl');

        $markdown_page = MarkdownElement::get();
        $file = 'docs/' . $doc_file;
        $markdown_page->setFile($file);
        $tpl->addElement('markdown_page', $markdown_page);

        $tpl->assign('page_title', $page_title . ' - Biscuit Link Documentation');
        $tpl->display();
    }

    private static function get_doc_title($doc_file)
    {
        if (isset(self::$valid_docs[$doc_file]))
        {
            return self::$valid_docs[$doc_file];
        }
        Request::redirect('/docs');
        return null;
    }
}