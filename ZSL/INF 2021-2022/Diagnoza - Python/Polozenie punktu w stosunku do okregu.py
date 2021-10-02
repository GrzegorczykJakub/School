x1 = int(input("x1: "))
y1 = int(input("y1: "))
x_center, y_center = 0, 0
radius = 5

if (x1 - x_center)**2 + (y1 - y_center)**2 < radius**2:
    print("Point", x1,";", y1, "is inside the circle")
elif (x1 - x_center)**2 + (y1 - y_center)**2 > radius**2:
    print("Point", x1,";", y1, "is outside the circle")
elif (x1 - x_center)**2 + (y1 - y_center)**2 == radius**2:
    print("Point", x1,";", y1, "is on the circle")
pass

