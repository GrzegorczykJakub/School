array = [56, 83, 21, -6, -75, 32, 90, 47, -3, 0, 7, 23, 13]
print(array)
# algorytm sortowania z pomoca internetu
for i in range(len(array)):
    norm = False
    even_number = False
    odd_number = False

    for a in range(i + 1, len(array)):
        if array[a] < 1:
            norm = True
        elif array[a] > 0 and array[a] % 2 == 0:
            even_number = True
        elif array[a] > 0 and array[a] % 2 != 0:
            odd_number = True
    x = i
    if norm:
        for a in range(i + 1, len(array)):
            if array[x] > array[a]:
                x = a
    elif even_number:
        for a in range(i + 1, len(array)):
            if array[x] > array[a] and array[a] % 2 == 0:
                x = a
    elif odd_number:
        for a in range(i + 1, len(array)):
            if array[x] < array[a] and array[a] % 2 != 0:
                x = a

    array[i], array[x] = array[x], array[i]

for i in range(len(array)):
    print("%d" % array[i])
