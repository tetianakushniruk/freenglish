<?php
    $vocabulary = array();
    $vocabulary['airconditioner']="an appliance that cools down the air in a home or building";
    $vocabulary['avalanche']="a dangerous slide of snow down a mountain";
    $vocabulary['below freezing']="temperature less than 0°C or 32°F";
    $vocabulary['blizzard']="a storm with lots of snow and wind";

    class Grammar
    {
        private $topic;
        private $explanation;
        private $examples;
        private $formation;
        private $formula;

        public function __construct($topic, $explanation, $examples, $formation, $formula)
        {
            $this->topic = $topic;
            $this->explanation = $explanation;
            $this->examples = $examples;
            $this->formation = $formation;
            $this->formula = $formula;
        }

        public function getTopic()
        {
            return $this->topic;
        }

        public function setTopic($topic)
        {
            $this->topic = $topic;
        }

        public function getExplanation()
        {
            return $this->explanation;
        }

        public function setExplanation($explanation)
        {
            $this->explanation = $explanation;
        }

        public function getExamples()
        {
            return $this->examples;
        }

        public function setExamples($examples)
        {
            $this->examples = $examples;
        }

        public function getFormation()
        {
            return $this->formation;
        }

        public function setFormation($formation)
        {
            $this->formation = $formation;
        }

        public function getFormula()
        {
            return $this->formula;
        }

        public function setFormula($formula)
        {
            $this->formula = $formula;
        }

        public function __toString()
        {
            return "Topic: ".$this->topic
                ."\r\nExplanation: ".$this->explanation
                ."\nExamples: ".implode(', ', $this->examples)
                ."\nFormation: ".implode(', ', $this->formation)
                ."\nFormula: ".implode(', ', $this->formula);
        }


    }

    $grammarVerbToBe = new Grammar('Verb to be',
        'We use the verb to be to express present states and conditions. 
        We can use “am, is, are” followed by a noun, adjective, preposition, or phrase.',
        array('He is a doctor', 'My bike is new', 'Alice is out', 'Here is the number of the my friend'),
        array('affirmative'=>array('I am happy.', 'He is fine.', 'They are my friends.'),
            'negative'=>array('I am not in the office.', 'He isn’t ready.', 'They aren’t good at basketball.'),
            'question'=>array('Am I right?', 'Is he a teacher?', 'Are they in your class?')),
        array('affirmative'=>array('I am', 'He / She / It is', 'You / We / They are'),
            'negative'=>array('I am not', 'He / She / It isn’t', 'You / We / They aren’t'),
            'question'=>array('Am I?', 'Is he / she / it?', 'Are you / we / they?'))
    );

?>