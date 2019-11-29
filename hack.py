n=int(input())
list=[int(input()) for i in range(n)]
print(list)
busnumber=list[-1]
for i in range(len(list)):
    if(i==len(list)-1):
        break
    elif(list[i+1]==3*list[i]):
        busnumber=list[i]
print(busnumber)
