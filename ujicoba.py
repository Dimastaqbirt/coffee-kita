# class Node:
#     def __init__(self, val):
#         self.l = None
#         self.r = None
#         self.v = val

# class Tree:
#     def __init__(self):
#         self.root = None

#     def getRoot(self):
#         return self.root

#     def add(self, val):
#         if(self.root == None):
#             self.root = Node(val)
#         else:
#             self._add(val, self.root)

#     def _add(self, val, node):
#         if(val < node.v):
#             if(node.l != None):
#                 self._add(val, node.l)
#             else:
#                 node.l = Node(val)
#         else:
#             if(node.r != None):
#                 self._add(val, node.r)
#             else:
#                 node.r = Node(val)

#     def find(self, val):
#         if(self.root != None):
#             return self._find(val, self.root)
#         else:
#             return None

#     def _find(self, val, node):
#         if(val == node.v):
#             return node
#         Elif(val < node.v and node.l != None):
#             self._find(val, node.l)
#         Elif(val > node.v and node.r != None):
#             self._find(val, node.r)

#     def deleteTree(self):
#         # garbage collector will do this for us. 
#         self.root = None

#     def printTree(self):
#         if(self.root != None):
#             self._printTree(self.root)

#     def _printTree(self, node):
#         if(node != None):
#             self._printTree(node.l)
#             print str(node.v) + ' '
#             self._printTree(node.r)

# #     3
# # 0     4
# #   2      8
# tree = Tree()
# tree.add(3)
# tree.add(4)
# tree.add(0)
# tree.add(8)
# tree.add(2)
# tree.printTree()
# print (tree.find(3)).v
# print tree.find(10)
# tree.deleteTree()
# tree.printTree()

# # simple binary tree
# # in this implementation, a node is inserted between an existing node and the root


# class BinaryTree():

#     def __init__(self,rootid):
#       self.left = None
#       self.right = None
#       self.rootid = rootid

#     def getLeftChild(self):
#         return self.left
#     def getRightChild(self):
#         return self.right
#     def setNodeValue(self,value):
#         self.rootid = value
#     def getNodeValue(self):
#         return self.rootid

#     def insertRight(self,newNode):
#         if self.right == None:
#             self.right = BinaryTree(newNode)
#         else:
#             tree = BinaryTree(newNode)
#             tree.right = self.right
#             self.right = tree

#     def insertLeft(self,newNode):
#         if self.left == None:
#             self.left = BinaryTree(newNode)
#         else:
#             tree = BinaryTree(newNode)
#             tree.left = self.left
#             self.left = tree


# def printTree(tree):
#         if tree != None:
#             printTree(tree.getLeftChild())
#             print(tree.getNodeValue())
#             printTree(tree.getRightChild())



# # test tree

# def testTree():
#     myTree = BinaryTree("Maud")
#     myTree.insertLeft("Bob")
#     myTree.insertRight("Tony")
#     myTree.insertRight("Steven")
#     printTree(myTree)

#     def _add(node, v):
#     new = [v, [], []]
#     if node:
#         left, right = node[1:]
#         if not left:
#             left.extend(new)
#         Elif not right:
#             right.extend(new)
#         else:
#             _add(left, v)
#     else:
#         node.extend(new)

# def binary_tree(s):
#     root = []
#     for e in s:
#         _add(root, e)
#     return root

# def traverse(n, order):
#     if n:
#         v = n[0]
#         if order == 'pre':
#             yield v
#         for left in traverse(n[1], order):
#             yield left
#         if order == 'in':
#             yield v
#         for right in traverse(n[2], order):
#             yield right
#         if order == 'post':
#             yield v

class Karyawan:
    '''Dasar kelas untuk semua karyawan'''
    jumlah_karyawan = 0

    def __init__(self, nama, gaji):
        self.nama = nama
        self.gaji = gaji
        Karyawan.jumlah_karyawan += 1

    def tampilkan_jumlah(self):
        print("Total karyawan:", Karyawan.jumlah_karyawan)

    def tampilkan_profil(self):
        print("Nama :", self.nama)
        print("Gaji :", self.gaji)

# Membuat objek pertama dari kelas Karyawan
karyawan1 = Karyawan("Sarah", 1000000)
# Membuat objek kedua dari kelas Karyawan
karyawan2 = Karyawan("Budi", 2000000)

karyawan1.tampilkan_profil()
karyawan2.tampilkan_profil()
print("Total karyawan :", Karyawan.jumlah_karyawan)