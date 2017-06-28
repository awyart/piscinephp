<?php
    class UnholyFactory
    {
        private $soldat = array();
        public function absorb($soldat)
        {
            if (get_parent_class($soldat))
            {
                if (isset($this->soldat[$soldat->getName()]))
                {
                    print("(Factory already absorbed a fighter of type " . $soldat->getName() . ")" . PHP_EOL);
                }
                else
                {
                    print("(Factory absorbed a fighter of type " . $soldat->getName() . ")" . PHP_EOL);
                    $this->soldat[$soldat->getName()] = $soldat;
                }
            }
            else
            {
                print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
            }
        }
        public function fabricate($soldat)
        {
            if (array_key_exists($soldat, $this->soldat))
            {
                print("(Factory fabricates a fighter of type " . $soldat . ")" . PHP_EOL);
                return (clone $this->soldat[$soldat]);
            }
            print("(Factory hasn't absorbed any fighter of type " . $soldat . ")" . PHP_EOL);
            return null;
        }
    }
?>