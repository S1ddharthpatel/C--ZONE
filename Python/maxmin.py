largest = None
smallest = None
while True:
	num = input("Enter a number: ")
	if num == "done" :
		break
	num=int(num)
	if largest < num :
		largest = num
	if smallest is None :
		smallest = num
	elif smallest > num :
			smallest = num
print("Maximum is", largest)
print("Minimum is", smallest)
