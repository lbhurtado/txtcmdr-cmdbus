<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 04/11/15
 * Time: 07:44
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleController extends ApiController
{
    const URL_LABS_BIBLE_ORG_API = 'http://labs.bible.org/api?';

    public function getRandom() {
        return $this->getResults("random");
    }

    public function getPassage ($passage) {
        return $this->getResults($passage);
    }

    public function getResults($passage)
    {
        $formatting = $this->request->input('formatting') ? $this->request->input('formatting') : 'plain';
        $type = $this->request->input('type') ? $this->request->input('type') : 'text';

        $query = http_build_query([
            'passage' => $passage,
            'formatting' => $formatting,
            'type' => $type
        ]);

        $request = '' . self::URL_LABS_BIBLE_ORG_API . '' . $query;

        $result = preg_replace('/[[:^print:]]/', '', file_get_contents($request));
        if (!$result) {
            return $this->respondNotFound('Passage does not exist!');
        }
        return $this->respond([
            'data' => $result
        ]);
    }
}