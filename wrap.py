
string=input()
l=list(string)
k=0
m=[]
r=[]
max_width=int(input())
while(len(l)%max_width!=0):
       l.pop()
       k+=1
#print(l)

for i in  range(len(l)//max_width):
       nlist=l[max_width*i:max_width*(i+1)]
       m.append(nlist)
m.append(string[-k:])
#print(m)
#print("\n".join(nlist))
for i in m:
       r.append("".join(i))
print("\n".join(r))

