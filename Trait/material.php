<?php

trait Material {

    protected string $material;

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial(string $material): void {
        $this->material = $material;
    }
}
?>
