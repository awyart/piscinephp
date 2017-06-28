<?php
    class NightsWatch implements IFighter
    {
        private $soldat = array();
        
        public function recruit($soldat)
        {
            $this->soldat[] = $soldat;
        }
        function fight()
        {
            foreach ($this->soldat as $soldat)
            {
                if (method_exists(get_class($soldat), 'fight'))
                    $soldat->fight();
            }
        }
    }
?>