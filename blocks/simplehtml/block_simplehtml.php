<?php
class block_simplehtml extends block_base {
  public function init() {
    $this->title = get_string('simplehtml', 'block_simplehtml');
  }
  public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
    $this->content = new stdClass;
    $this->content->text = 'The content of out SimpleHTML block!';
    global $COURSE;

    $url = new moodle_url('/blocks/simplehtml/view.php', array('blockid' => $this->instance->id, 'courseid' => $COURSE->id));
    $this->content->footer = html_writer::link($url, get_string('addpage', 'block_simplehtml'));

    if (! empty($this->config->text)) {
      $this->content->text = $this->config->text;
    }

    return $this->content;
  }
  public function specialization() {
    if (isset($this->config)) {
      if (empty($this->config->title)) {
        $this->title = get_string('blocktitle', 'block_simplehtml');
      }
      else {
        $this->title = $this->config->title;
      }

      if (empty($this->config->text)) {
        $this->config->text = get_string('blockstring', 'block_simplehtml');
      }



    }
  }
  public function instance_allow_multiple() {
    return true;
  }
  public function instance_config_save($data,$nolongerused =false) {
    if(get_config('simplehtml', 'Allow_HTML') == '0') {
      $data->text = strip_tags($data->text);
    }
    return parent::instance_config_save($data,$nolongerused);
  }
    public function html_attributes() {
      $attributes = parent::html_attributes(); // Get default values
      $attributes['class'] .= ' block_'. $this->name(); // Append our class to class attribute
      return $attributes;
  }
    public function applicable_formats() {
   return array(
            'site-index' => true,
           'course-view' => true,
    'course-view-social' => false,
                   'mod' => true,
              'mod-quiz' => false
   );
  }
    function has_config() {return true;}
}
