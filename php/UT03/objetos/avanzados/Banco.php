<?php 

    //La interface; Todavia no entiendo muy bien que estoy haciendo kekw :v
    interface PlataformaPago
    {
        public function estableceConexion():bool;
        public function compruebaSeguridad():bool;
        public function pagar(string $cuenta, int $cantidad);
    }

    //La clase BancoMalvado porque los bancos SIEMPRE son malos :3
    class BancoMalvado implements PlataformaPago
    {
        //atributos privados
        private $cuenta;
        private $cantidad;
         
        //setter getter
        public function setCuenta(string $cuenta){
            $this->cuenta = $cuenta;
        }
        public function getCuenta():string{
            return $this->cuenta;
        }

        public function setCantidad(int $cantidad){
            $this->cantidad = $cantidad;
        }
        public function getCantidad():int{
            return $this->cantidad;
        }

        //métodos BancoMalvado(todos)
        public function estableceConexion(): bool
        {
            echo "establezco conexion";
            return true;
        }
        public function compruebaSeguridad(): bool
        {
            echo "compruebo seguridad";
            return true;
        }
        public function pagar(string $cuenta, int $cantidad)
        {
            echo "pago realizadoooo";
        }
    }


    //La clase BancoMalvado porque los bancos SIEMPRE son malos :3
    class BitCoinConan implements PlataformaPago
    {
        //atributos privados
        private $cuenta;
        private $cantidad;
         
        //setter getter
        public function setCuenta(string $cuenta){
            $this->cuenta = $cuenta;
        }
        public function getCuenta():string{
            return $this->cuenta;
        }

        public function setCantidad(int $cantidad){
            $this->cantidad = $cantidad;
        }
        public function getCantidad():int{
            return $this->cantidad;
        }

        //métodos Bitcoin(malo como los bancos)
        public function estableceConexion(): bool
        {
            echo "establezco conexion con el Banco Bitcoin";
            return true;
        }
        public function compruebaSeguridad(): bool
        {
            echo "compruebo seguridad";
            return true;
        }
        public function pagar(string $cuenta, int $cantidad)
        {
            echo "pago realizado con bitcoin";
        }
    }


    //La clase BancoMalvado porque los bancos SIEMPRE son malos :3
    class BancoMaloMalisimo implements PlataformaPago
    {
        //atributos privados
        private $cuenta;
        private $cantidad;
         
        //setter getter
        public function setCuenta(string $cuenta){
            $this->cuenta = $cuenta;
        }
        public function getCuenta():string{
            return $this->cuenta;
        }

        public function setCantidad(int $cantidad){
            $this->cantidad = $cantidad;
        }
        public function getCantidad():int{
            return $this->cantidad;
        }

        //métodos Banco malo malisimo(si que tiene que ser malo la virgen)
        public function estableceConexion(): bool
        {
            echo "establezco conexion con el banco malo malisimo";
            return true;
        }
        public function compruebaSeguridad(): bool
        {
            echo "compruebo seguridad";
            return true;
        }
        public function pagar(string $cuenta, int $cantidad)
        {
            echo "pago realizado con el banco malo malisimo";
        }
    }
    
?>