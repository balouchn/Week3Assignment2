import sys
import math

def calculate_square_root(number):
    return math.sqrt(number)

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Error: One number is required.")
        sys.exit(1)

    try:
        number = float(sys.argv[1])

        if number < 0:
            print("Error: Please enter a non-negative number.")
            sys.exit(1)

    except ValueError:
        print("Error: Please enter a valid number.")
        sys.exit(1)

    result = calculate_square_root(number)
    print(f"The square root of {number} is {result}.")
