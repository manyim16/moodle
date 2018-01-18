<?php
class block_simplehtml_edit_form extends block_edit_form {
  protected function specific_definition($mform) {
    $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

    $mform->addElement('text', 'config_text', get_string('blockstring', 'block_simplehtml'));
    $mform->setDefault('config_text', 'default value');
    $mform->setType('config_text', PARAM_RAW);

    $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_simplehtml'));
    $mform->setDefault('config_title', 'default value');
    $mform->setType('config_title', PARAM_TEXT);
  }
//  if (! empty($this->config->text)) {
//    $this->content->text = $this->config->text;
  }
