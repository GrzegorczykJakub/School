import random

generated_numbers = [random.randint(-15, 15) for _ in range(18)]
print(generated_numbers)
smallest = generated_numbers[0]
for i in range(len(generated_numbers)):
    if generated_numbers[i] < smallest:
        smallest = generated_numbers[i]
print(smallest)