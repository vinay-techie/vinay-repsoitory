n,width=map(int,input().split())
k=0
m=".|."
print(n,width)
for i in range(n//2):
    s=m*(k+1)
    print(s.center(width,"-"),end="\n")
    k+=2
print("WELCOME".center(width,"-"))
for i in range(n//2):
    s=m*(k-1)
    print(s.center(width,"-"),end="\n")
    k-=2
