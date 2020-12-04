from car import Car

if __name__ == "__main__":
    print("Hola Mundo")
    car = Car()
    car.license = "AMQ123"
    car.driver = "Andres Herrera"
    car.passenger = 4
    print(vars(car))

    car2 = Car()
    car2.license = "QWE567"
    car2.driver = "Andrea Herrera"
    car2.passenger = 3
    #print(vars(car2))
    print(vars(car))