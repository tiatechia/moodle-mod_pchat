<?php
/**
 * Created by PhpStorm.
 * User: ishineguy
 * Date: 2018/03/13
 * Time: 19:32
 */

namespace mod_pchat\attempt;

use \mod_pchat\constants;

class audiorecordingform extends baseform
{

    public $type = constants::TYPE_AUDIORECORDING;
    public $typestring = constants::T_AUDIORECORDING;
    public function custom_definition() {
        $this->token = $this->_customdata['token'];
        $this->add_recordingurl_field();

    }
    public function custom_definition_after_data() {
        $this->add_audio_recording(get_string('audiorecording',constants::M_COMPONENT));

    }

}