class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
        uberX.passenger = 4;
        uberX.printDataCar();

        // Car car2 = new Car("QWE567", new Account("Andrea Herrera", "ANDA876"));
        // car2.passenger = 3;
        // car2.printDataCar();
    }
}